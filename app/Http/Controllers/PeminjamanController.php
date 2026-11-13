<?php

namespace App\Http\Controllers;

use App\Models\Alsintan;
use App\Models\DetailPeminjaman;
use App\Models\LogAktivitas;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    // Form Pengajuan Peminjaman (Petani)
    public function create()
    {
        $alsintans = Alsintan::where('status_operasional', '!=', 'perawatan')->get();
        return view('petani.create-peminjaman', compact('alsintans'));
    }

    // Simpan Pengajuan Peminjaman (BR-03, BR-04, BR-05, BR-08, FR-12)
    public function store(Request $request)
    {
        $request->validate([
            'alsintan_ids' => 'required|array|min:1',
            'alsintan_ids.*' => 'exists:alat_berat,id_alsintan',
            'waktu_mulai' => 'required|date|after:now', // BR-05
            'waktu_selesai' => 'required|date|after:waktu_mulai', // BR-05
            'lokasi_lahan' => 'required|string|max:255',
            'keperluan' => 'required|string',
        ], [
            'waktu_mulai.after' => 'Waktu mulai tidak boleh pada masa lalu (BR-05).',
            'waktu_selesai.after' => 'Waktu selesai harus setelah waktu mulai (BR-05).',
        ]);

        $mulai = Carbon::parse($request->waktu_mulai);
        $selesai = Carbon::parse($request->waktu_selesai);

        // BR-08 & FR-07: Cek tumpang tindih jadwal yang sudah disetujui/berlangsung
        foreach ($request->alsintan_ids as $idAlsintan) {
            $bentrok = Peminjaman::whereHas('detail', fn($q) => $q->where('id_alsintan', $idAlsintan))
                ->whereIn('status_peminjaman', ['disetujui', 'berlangsung'])
                ->where(function ($q) use ($mulai, $selesai) {
                    $q->where('waktu_mulai', '<', $selesai)
                      ->where('waktu_selesai', '>', $mulai);
                })->exists();

            if ($bentrok) {
                $alat = Alsintan::find($idAlsintan);
                return back()->withInput()->withErrors([
                    'jadwal' => "Jadwal alsintan '{$alat->nama_alat}' bertumpang tindih pada rentang waktu tersebut (BR-08)."
                ]);
            }
        }

        // Hitung durasi hari (minimal 1 hari)
        $durasiHari = max(1, ceil($mulai->diffInHours($selesai) / 24));

        DB::transaction(function () use ($request, $mulai, $selesai, $durasiHari) {
            $peminjaman = Peminjaman::create([
                'id_peminjam' => Auth::id(),
                'tanggal_pengajuan' => now()->toDateString(),
                'waktu_mulai' => $mulai,
                'waktu_selesai' => $selesai,
                'lokasi_lahan' => $request->lokasi_lahan,
                'keperluan' => $request->keperluan,
                'status_peminjaman' => 'menunggu',
                'total_biaya' => 0,
            ]);

            $totalBiaya = 0;
            foreach ($request->alsintan_ids as $idAlsintan) {
                $alat = Alsintan::findOrFail($idAlsintan);
                $subtotal = $alat->tarif_sewa_per_hari * $durasiHari;
                $totalBiaya += $subtotal;

                DetailPeminjaman::create([
                    'id_peminjaman' => $peminjaman->id_peminjaman,
                    'id_alsintan' => $idAlsintan,
                    'subtotal' => $subtotal,
                ]);
            }

            $peminjaman->update(['total_biaya' => $totalBiaya]);
        });

        return redirect()->route('peminjaman.saya')->with('success', 'Pengajuan peminjaman berhasil dikirim dan menunggu persetujuan pengelola.');
    }

    // Peminjaman Milik Sendiri (Petani - FR-06, FR-09, FR-11)
    public function peminjamanSaya()
    {
        $peminjamans = Peminjaman::with('detail.alsintan')
            ->where('id_peminjam', Auth::id())
            ->orderByDesc('id_peminjaman')
            ->get();

        return view('petani.peminjaman-saya', compact('peminjamans'));
    }

    // Detail Peminjaman
    public function show($id)
    {
        $peminjaman = Peminjaman::with(['peminjam', 'pengelola', 'detail.alsintan'])->findOrFail($id);
        return Auth::user()->role === 'pengelola'
            ? view('pengelola.detail-peminjaman', compact('peminjaman'))
            : view('petani.detail-peminjaman', compact('peminjaman'));
    }

    // Batalkan Pengajuan (Petani - BR-09 & FR-13)
    public function batal($id)
    {
        $peminjaman = Peminjaman::where('id_peminjam', Auth::id())->findOrFail($id);

        if ($peminjaman->status_peminjaman !== 'menunggu') {
            return back()->withErrors(['error' => 'Pengajuan tidak dapat dibatalkan karena sudah diproses (BR-09).']);
        }

        $peminjaman->update(['status_peminjaman' => 'dibatalkan']);
        return back()->with('success', 'Pengajuan peminjaman berhasil dibatalkan.');
    }

    // Daftar Seluruh Pengajuan (Pengelola - FR-14)
    public function indexPengelola()
    {
        $peminjamans = Peminjaman::with(['peminjam', 'detail.alsintan'])
            ->orderByDesc('id_peminjaman')
            ->get();

        return view('pengelola.peminjaman', compact('peminjamans'));
    }

    // Setujui Pengajuan (Pengelola - FR-05 & BR-08)
    public function setujui($id)
    {
        $peminjaman = Peminjaman::with('detail.alsintan')->findOrFail($id);

        // Cek ulang bentrok sebelum menyetujui (BR-08)
        foreach ($peminjaman->detail as $item) {
            $bentrok = Peminjaman::where('id_peminjaman', '!=', $id)
                ->whereHas('detail', fn($q) => $q->where('id_alsintan', $item->id_alsintan))
                ->whereIn('status_peminjaman', ['disetujui', 'berlangsung'])
                ->where(function ($q) use ($peminjaman) {
                    $q->where('waktu_mulai', '<', $peminjaman->waktu_selesai)
                      ->where('waktu_selesai', '>', $peminjaman->waktu_mulai);
                })->exists();

            if ($bentrok) {
                return back()->withErrors(['error' => "Tidak dapat menyetujui! Jadwal '{$item->alsintan->nama_alat}' bertumpang tindih dengan jadwal lain."]);
            }
        }

        $peminjaman->update([
            'status_peminjaman' => 'disetujui',
            'id_pengelola' => Auth::id(),
            'waktu_diproses' => now(),
        ]);

        LogAktivitas::create([
            'id_user' => Auth::id(),
            'aksi' => 'setujui',
            'entitas' => 'peminjaman',
            'id_entitas' => $id,
            'keterangan' => "Menyetujui peminjaman #{$id}",
        ]);

        return back()->with('success', 'Pengajuan peminjaman disetujui.');
    }

    // Tolak Pengajuan (Pengelola - FR-05 & FR-17 Wajib Alasan)
    public function tolak(Request $request, $id)
    {
        $request->validate([
            'catatan_pengelola' => 'required|string',
        ], [
            'catatan_pengelola.required' => 'Alasan penolakan wajib diisi (FR-17).',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update([
            'status_peminjaman' => 'ditolak',
            'id_pengelola' => Auth::id(),
            'waktu_diproses' => now(),
            'catatan_pengelola' => $request->catatan_pengelola,
        ]);

        LogAktivitas::create([
            'id_user' => Auth::id(),
            'aksi' => 'tolak',
            'entitas' => 'peminjaman',
            'id_entitas' => $id,
            'keterangan' => "Menolak peminjaman #{$id}: {$request->catatan_pengelola}",
        ]);

        return back()->with('success', 'Pengajuan peminjaman ditolak.');
    }

    // Catat Penyerahan Alsintan (Pengelola - FR-15)
    public function serahTerima($id)
    {
        $peminjaman = Peminjaman::with('detail.alsintan')->findOrFail($id);
        $peminjaman->update([
            'status_peminjaman' => 'berlangsung',
            'waktu_pengambilan' => now(),
        ]);

        foreach ($peminjaman->detail as $item) {
            $item->alsintan->update(['status_operasional' => 'disewa']);
        }

        LogAktivitas::create([
            'id_user' => Auth::id(),
            'aksi' => 'serah_terima',
            'entitas' => 'peminjaman',
            'id_entitas' => $id,
            'keterangan' => "Mencatat penyerahan alsintan untuk peminjaman #{$id}",
        ]);

        return back()->with('success', 'Penyerahan alsintan berhasil dicatat.');
    }

    // Catat Pengembalian Alsintan (Pengelola - FR-16 & BR-10)
    public function kembali($id)
    {
        $peminjaman = Peminjaman::with('detail.alsintan')->findOrFail($id);
        $peminjaman->update([
            'status_peminjaman' => 'selesai',
            'waktu_penyerahan' => now(),
        ]);

        foreach ($peminjaman->detail as $item) {
            $item->alsintan->update(['status_operasional' => 'tersedia']);
        }

        LogAktivitas::create([
            'id_user' => Auth::id(),
            'aksi' => 'kembali',
            'entitas' => 'peminjaman',
            'id_entitas' => $id,
            'keterangan' => "Mencatat pengembalian alsintan & menyelesaikan peminjaman #{$id}",
        ]);

        return back()->with('success', 'Pengembalian dicatat dan peminjaman selesai.');
    }
}
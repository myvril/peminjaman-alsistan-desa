<?php

namespace App\Http\Controllers;

use App\Models\Alsintan;
use App\Models\LogAktivitas;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlsintanController extends Controller
{
    // Daftar Alsintan (Petani & Pengelola)
    public function index(Request $request)
    {
        $jenis = $request->query('jenis');
        $alsintans = Alsintan::when($jenis, fn($q) => $q->where('jenis', $jenis))->get();

        return Auth::user()->role === 'pengelola'
            ? view('pengelola.alsintan', compact('alsintans'))
            : view('petani.alsintan', compact('alsintans', 'jenis'));
    }

    // Jadwal Terisi Alsintan (FR-07 & BR-07: Hanya yang sudah disetujui/berlangsung)
    public function jadwal($id)
    {
        $alsintan = Alsintan::findOrFail($id);
        $jadwalTerisi = Peminjaman::whereHas('detail', fn($q) => $q->where('id_alsintan', $id))
            ->whereIn('status_peminjaman', ['disetujui', 'berlangsung'])
            ->get(['id_peminjaman', 'waktu_mulai', 'waktu_selesai', 'lokasi_lahan', 'status_peminjaman']);

        return response()->json([
            'alsintan' => $alsintan->nama_alat,
            'jadwal' => $jadwalTerisi,
        ]);
    }

    // Form Tambah Alsintan (Pengelola)
    public function create()
    {
        return view('pengelola.alsintan-form');
    }

    // Simpan Alsintan Baru (CREATE)
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_alat' => 'required|string|max:100',
            'jenis' => 'required|in:traktor,combine,drone spray,transplanter',
            'deskripsi' => 'required|string',
            'tarif_sewa_per_hari' => 'required|numeric|min:0',
            'status_operasional' => 'required|in:tersedia,disewa,perawatan',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $filename = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('images'), $filename);
            $data['foto'] = $filename;
        } else {
            // Default gambar sesuai jenis jika tidak upload file baru
            $defaultFotos = [
                'traktor' => 'traktor.png',
                'combine' => 'combine.png',
                'drone spray' => 'drone-spray.png',
                'transplanter' => 'transplanter.png',
            ];
            $data['foto'] = $defaultFotos[$data['jenis']] ?? 'traktor.png';
        }

        $alsintan = Alsintan::create($data);

        LogAktivitas::create([
            'id_user' => Auth::id(),
            'aksi' => 'tambah_alat',
            'entitas' => 'alsintan',
            'id_entitas' => $alsintan->id_alsintan,
            'keterangan' => "Menambahkan alsintan baru: {$alsintan->nama_alat}",
        ]);

        return redirect()->route('pengelola.alsintan.index')->with('success', 'Alsintan berhasil ditambahkan.');
    }

    // Form Edit Alsintan (Pengelola)
    public function edit($id)
    {
        $alsintan = Alsintan::findOrFail($id);
        return view('pengelola.alsintan-form', compact('alsintan'));
    }

    // Update Alsintan (UPDATE)
    public function update(Request $request, $id)
    {
        $alsintan = Alsintan::findOrFail($id);
        $data = $request->validate([
            'nama_alat' => 'required|string|max:100',
            'jenis' => 'required|in:traktor,combine,drone spray,transplanter',
            'deskripsi' => 'required|string',
            'tarif_sewa_per_hari' => 'required|numeric|min:0',
            'status_operasional' => 'required|in:tersedia,disewa,perawatan',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $filename = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('images'), $filename);
            $data['foto'] = $filename;
        }

        $alsintan->update($data);

        LogAktivitas::create([
            'id_user' => Auth::id(),
            'aksi' => 'ubah_alat',
            'entitas' => 'alsintan',
            'id_entitas' => $alsintan->id_alsintan,
            'keterangan' => "Memperbarui data alsintan: {$alsintan->nama_alat}",
        ]);

        return redirect()->route('pengelola.alsintan.index')->with('success', 'Data alsintan berhasil diperbarui.');
    }

    // Hapus Alsintan (DELETE - Sesuai BR-11)
    public function destroy($id)
    {
        $alsintan = Alsintan::withCount('detailPeminjaman')->findOrFail($id);

        // BR-11: Hanya dapat dihapus jika tidak memiliki peminjaman aktif maupun selesai
        if ($alsintan->detail_peminjaman_count > 0) {
            return back()->withErrors(['error' => 'Gagal menghapus! Alsintan ini memiliki riwayat peminjaman aktif atau selesai (BR-11).']);
        }

        $namaAlat = $alsintan->nama_alat;
        $alsintan->delete();

        LogAktivitas::create([
            'id_user' => Auth::id(),
            'aksi' => 'hapus_alat',
            'entitas' => 'alsintan',
            'id_entitas' => $id,
            'keterangan' => "Menghapus alsintan: {$namaAlat}",
        ]);

        return back()->with('success', 'Data alsintan berhasil dihapus.');
    }
}
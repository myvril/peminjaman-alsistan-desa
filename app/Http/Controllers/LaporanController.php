<?php

namespace App\Http\Controllers;

use App\Models\Alsintan;
use App\Models\LogAktivitas;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function dashboard()
    {
        $totalAlsintan = Alsintan::count();
        $alsintanTersedia = Alsintan::where('status_operasional', 'tersedia')->count();
        $pengajuanMenunggu = Peminjaman::where('status_peminjaman', 'menunggu')->count();
        $sedangBerlangsung = Peminjaman::where('status_peminjaman', 'berlangsung')->count();
        $totalPendapatan = Peminjaman::whereIn('status_peminjaman', ['disetujui', 'berlangsung', 'selesai'])->sum('total_biaya');
        $peminjamans = Peminjaman::with(['peminjam', 'detail.alsintan'])
            ->orderByDesc('id_peminjaman')
            ->get();

        return view('pengelola.dashboard', compact(
            'totalAlsintan',
            'alsintanTersedia',
            'pengajuanMenunggu',
            'sedangBerlangsung',
            'totalPendapatan',
            'peminjamans'
        ));
    }

    public function laporan(Request $request)
    {
        $query = Peminjaman::with(['peminjam', 'pengelola', 'detail.alsintan'])
            ->whereIn('status_peminjaman', ['disetujui', 'berlangsung', 'selesai']);

        if ($request->filled('tanggal_mulai')) {
            $query->whereDate('tanggal_pengajuan', '>=', $request->tanggal_mulai);
        }

        if ($request->filled('tanggal_selesai')) {
            $query->whereDate('tanggal_pengajuan', '<=', $request->tanggal_selesai);
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status_peminjaman', $request->status);
        }

        $laporans = $query->orderByDesc('tanggal_pengajuan')->get();

        return view('pengelola.laporan', compact('laporans'));
    }

    public function log()
    {
        $logs = LogAktivitas::with('user')->orderByDesc('id_log')->get();
        return view('pengelola.log', compact('logs'));
    }
}
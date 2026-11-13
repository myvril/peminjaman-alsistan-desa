<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alsintan;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    //
    public function index()
    {
    $nama_user                 = Auth::user()->nama;
    $total_alsintan_siap_pakai = Alsintan::where('status_operasional', 'tersedia')->count();
    $peminjaman_berlangsung    = Peminjaman::where('status_peminjaman', 'dipinjam')->count();
    $menunggu_persetujuan      = Peminjaman::where('status_peminjaman', 'menunggu')->count();
    $total_pemasukan_sewa_desa = Peminjaman::whereIn('status_peminjaman', ['disetujui', 'dipinjam', 'selesai'])->sum('total_biaya');

    return view('pengelola.dashboard_pengelola', compact(
        'nama_user',
        'total_alsintan_siap_pakai',
        'peminjaman_berlangsung',
        'menunggu_persetujuan',
        'total_pemasukan_sewa_desa'
    ));
    }
}

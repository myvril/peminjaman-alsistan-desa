<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    //

    public function getPeminjamanBerlangsung(){
        return Peminjaman::where('status_peminjaman', 'berlangsung')->count();
    }

    public function getPeminjamanMenunggu(){
        return Peminjaman::where('status_peminjaman', 'menunggu')->count();
    }

    public function getTotalPemasukan(){
        return Peminjaman::whereIn('status', ['disetujui', 'dipinjam', 'selesai'])->sum('total_biaya');
    } 
}

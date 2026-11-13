<?php

use App\Http\Controllers\AlsintanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return Auth::user()->role === 'pengelola'
            ? redirect()->route('pengelola.dashboard')
            : redirect()->route('alsintan.index');
    }

    return redirect()->route('login');
});

// Pengunjung (Guest)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Pengguna yang sudah login
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Petani & Pengelola
    Route::get('/alsintan', [AlsintanController::class, 'index'])->name('alsintan.index');
    Route::get('/alsintan/{id}/jadwal', [AlsintanController::class, 'jadwal'])->name('alsintan.jadwal');

    // Rute Khusus Petani (Peminjam)
    Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('/peminjaman-saya', [PeminjamanController::class, 'peminjamanSaya'])->name('peminjaman.saya');
    Route::get('/peminjaman/{id}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
    Route::patch('/peminjaman/{id}/batal', [PeminjamanController::class, 'batal'])->name('peminjaman.batal');

    // Rute Khusus Pengelola Desa
    Route::prefix('pengelola')->name('pengelola.')->group(function () {
        Route::get('/dashboard', [LaporanController::class, 'dashboard'])->name('dashboard');
        Route::get('/peminjaman', [PeminjamanController::class, 'indexPengelola'])->name('peminjaman.index');
        Route::get('/peminjaman/{id}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
        Route::patch('/peminjaman/{id}/setujui', [PeminjamanController::class, 'setujui'])->name('peminjaman.setujui');
        Route::patch('/peminjaman/{id}/tolak', [PeminjamanController::class, 'tolak'])->name('peminjaman.tolak');
        Route::patch('/peminjaman/{id}/serah-terima', [PeminjamanController::class, 'serahTerima'])->name('peminjaman.serahTerima');
        Route::patch('/peminjaman/{id}/kembali', [PeminjamanController::class, 'kembali'])->name('peminjaman.kembali');

        // CRUD Alsintan
        Route::get('/alsintan', [AlsintanController::class, 'index'])->name('alsintan.index');
        Route::get('/alsintan/create', [AlsintanController::class, 'create'])->name('alsintan.create');
        Route::post('/alsintan', [AlsintanController::class, 'store'])->name('alsintan.store');
        Route::get('/alsintan/{id}/edit', [AlsintanController::class, 'edit'])->name('alsintan.edit');
        Route::put('/alsintan/{id}', [AlsintanController::class, 'update'])->name('alsintan.update');
        Route::delete('/alsintan/{id}', [AlsintanController::class, 'destroy'])->name('alsintan.destroy');

        // Laporan & Log Aktivitas
        Route::get('/laporan', [LaporanController::class, 'laporan'])->name('laporan');
        Route::get('/log', [LaporanController::class, 'log'])->name('log');
    });
});
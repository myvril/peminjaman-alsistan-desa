<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route sesuai laporan

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login' , [AuthController::class, 'login']);

Route::get('register' , function () {
    return view('auth.register');
})->name('register');

Route::post('register' , function () {

});

Route::post('/logout' , function () {

});

Route::get('/alsintan' , function () {

});

Route::post('/peminjaman' , function () {

});

Route::get('/peminjaman/create' , function () {

});

Route::get('/peminjaman/{id}' , function () {

});

Route::get('/alsintan/{id}/jadwal' , function () {

});

Route::get('/peminjaman-saya' , function () {

});

Route::patch('peminjaman/{id}/batal' , function () {

});

Route::get('/pengelola/dashboard' , function () {

});

Route::get('/pengelola/peminjaman' , function () {

});

Route::get('/pengelola/peminjaman/{id}' , function () {

});

Route::patch('/pengelola/peminjaman/{id}/setujui' , function () {

});

Route::patch('/pengelola/peminjaman/{id}/tolak', function () {

});

Route::patch('/pengelola/peminjaman/{id}/serah-terima' , function () {

});

Route::patch('/pengelola/peminjaman/{id}/kembali' , function () {

});

Route::get('/pengelola/laporan' , function () {

});

Route::post('/pengelola/alsintan' , function() {

});

Route::get('/pengelola/alsintan/create' , function() {

});

Route::get('/pengelola/alsintan/{id}/edit' , function() {

});

Route::delete('/pengelola/alsintan/{id}' , function() {

});

Route::get('/pengelola/log' , function() {

});
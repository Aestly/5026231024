<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat Datang di Laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

// Corrected route for the Coba controller
Route::get('hello', [Coba::class, 'helloword']);

Route::get('dosen', [Coba::class, 'index']);

// Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);


Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// Week 13
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

// Task 10-12
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController:: class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController:: class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiDBController:: class, 'hapus']);
// ============================================

Route::get('tugas1', function () {
    return view('tugas1');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('kodesoal2', function () {
    return view('kodesoal2');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('pertama', function () {
    return view('pertama');
});



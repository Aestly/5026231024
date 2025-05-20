<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;

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

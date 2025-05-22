<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('frontend');
});

// Route buat masing-masing page yang tombol bakal direct ke situ
Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/pertemuan2', function () {
    return view('pertemuan2');
});

Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KipasAnginDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\KeranjangDBController;
use App\Http\Controllers\PageCounterDBController;

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

Route::get('/template', function () {
    return view('template');
});

Route::get('/kipasangin', function () {
    return view('kipasangin');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

// Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

//route kipasanginDB
Route::get('/kipasangin', [KipasAnginDBController::class, 'index']);
Route::get('/kipasangin/cari', [KipasAnginDBController::class, 'cari']);
Route::get('/kipasangin/tambah', [KipasAnginDBController::class, 'tambah']);
Route::post('/kipasangin/store', [KipasAnginDBController::class, 'store']);
Route::get('/kipasangin/edit/{id}', [KipasAnginDBController::class, 'edit']);
Route::post('/kipasangin/update', [KipasAnginDBController::class, 'update']);
Route::get('/kipasangin/hapus/{id}', [KipasAnginDBController::class, 'hapus']);

//route KaryawanDBController
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/karyawan/cari', [KaryawanDBController::class, 'cari']);
Route::get('/karyawan/tambah', [KaryawanDBController::class, 'tambah']);
Route::get('/karyawan/store', [KaryawanDBController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanDBController::class, 'edit']);
Route::get('/karyawan/update', [KaryawanDBController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapus']);

// route CRUD dataabase keranjangbelanja belajar_laravel
Route::get('/keranjang', [App\Http\Controllers\KeranjangDBController::class, 'indexkeranjang']);
Route::get('/keranjang/tambah', [App\Http\Controllers\KeranjangDBController::class, 'tambahkeranjang']);
// Route::post('/keranjang/store', [App\Http\Controllers\KeranjangController::class, 'storekeranjang']);
Route::get('/keranjang/tambah/{ID}', [App\Http\Controllers\KeranjangDBController::class, 'storekeranjang']);
Route::post('/keranjang/update', [App\Http\Controllers\KeranjangDBController::class, 'updatekeranjang']);
Route::get('/keranjang/hapus/{ID}', [App\Http\Controllers\KeranjangDBController::class, 'keranjangbelanja']);

Route::get('/pagecounter', [App\Http\Controllers\PageCounterDBController::class, 'index']);


<?php

use Illuminate\Support\Facades\Route;

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

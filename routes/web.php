<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Langkah 1, Membuat route sederhana
// route: http://127.0.0.1/profil
Route::get('/profil', function () {
    return "Ini adalah halaman profil";
});

// Langkah 2, Membuat route sederhana dari file views/home.blade.php
// route: http://127.0.0.1/home
Route::get('/home', function () {
    return view('home');
});

// Langkah 4, Mengirim data ke view
Route::get('/mahasiswa', function () {
    $nama = "Fury Dr";
    return view('mahasiswa', compact('nama'));
});
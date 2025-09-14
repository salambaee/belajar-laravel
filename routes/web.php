<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/musang', function () {
    return view('musang');
});

Route::get('/contact', function () {
    return view('contact');
});
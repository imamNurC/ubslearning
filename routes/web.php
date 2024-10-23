<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

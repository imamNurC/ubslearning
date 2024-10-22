<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/sidebar', function () {
    return view('sidebar_admin/sidebar');
});

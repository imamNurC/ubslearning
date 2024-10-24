<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sidebar_admin/sidebar');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});



<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/register', function () {
    return view('admin/register');
});
Route::get('/demo', function () {
    return view('demo');
});

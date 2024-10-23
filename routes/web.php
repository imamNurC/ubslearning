<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/login',[LoginController::class, 'index'] );
Route::post('/login',[LoginController::class, 'authenticate'] );
Route::get('/sidebar', function () {
    return view('sidebar_admin/sidebar');
});

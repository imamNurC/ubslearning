<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContentManageController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout',[LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard_user/dashboardUser');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardAdmin', function () {
        return view('dashboard/dashboard');
    });

    Route::get('/content-manage', [ContentManageController::class, 'index']);
    
    Route::post('/content-manage', [ContentManageController::class, 'store']);
    Route::post('/content-manage/update/{id_content}', [ContentManageController::class, 'update'])->name('content.update');

    Route::delete('/content-manage/delete/{id_content}', [ContentManageController::class, 'delete'])->name('content.delete');

    Route::get('/user-manage', function () {
        return view('dashboard/dashboard_user_manage');
    });

    Route::get('/analytic', function () {
        return view('dashboard/dashboard_analytic');
    });
});



//dashboard user
Route::middleware(['auth', 'user'])->group(function () {

Route::get('/my-content', function () {
    return view('dashboard_user/dashboardUser_my_content');
});

Route::get('/my-profile', function () {
    return view('dashboard_user/dashboardUser_my_profile');
});


});
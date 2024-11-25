<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ContentManageController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Rout Untuk Menu Content Manage

// Route::get('/register', [RegisterController::class, 'store']);

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logoutMentor', [LoginController::class, 'logout']);

// Route::get('/dashboard', function () {
//     return view('dashboard_user/dashboardUser');
// });


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardAdmin', function () {
        return view('dashboard_admin/dashboard');
    });

    Route::get('/content-manage', [ContentManageController::class, 'index']);

    Route::post('/content-manage', [ContentManageController::class, 'store']);
    Route::post('/content-manage/update/{id_content}', [ContentManageController::class, 'update'])->name('content.update');

    Route::delete('/content-manage/delete/{id_content}', [ContentManageController::class, 'delete'])->name('content.delete');
    // Route::get('/content-manage', function () {
    //     return view('dashboard_admin/dashboard_content_manage');
    // });

    Route::get('/user-manage', function () {
        return view('dashboard_admin/dashboard_user_manage');
    });

    Route::get('/analytic', function () {
        return view('dashboard_admin/dashboard_analytic');
    });

    Route::get('/analytic', [AnalyticsController::class, 'index']);
});



//dashboard user
Route::middleware(['auth', 'user'])->group(function () {

    // Route::get('/home', function () {
    //     return view('dashboard_user/dashboardUser');
    // });

    Route::get('/home/{username}', [ContentManageController::class, 'products'])->name('home');


    Route::get('/my-content/{username}', [CustomerController::class, 'showMyContent'])->name('my-content');
    // Route::get('/my-profile', function () {
    //     return view('dashboard_user/dashboardUser_my_profile');
    // });
    Route::get('/my-profile/{username}', [CustomerController::class, 'showProfile'])->name('profile.show');
    Route::post('/my-profile/{username}/update', [CustomerController::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/{username}/change-password', [CustomerController::class, 'changePassword'])->name('profile.changePassword');
});

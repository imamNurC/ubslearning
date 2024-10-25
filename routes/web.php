<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Middleware\CheckUserType;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/register', [RegisterController::class, 'store']);

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);




// Protected Routes
// Route::get('/dashboardAdmin', function () {
//     return view('dashboard_admin/dashboard');
// })->middleware(CheckUserType::class);


// Protected Routes
Route::group(['middleware' => ['auth']], function () {
    // Admin Routes
    Route::group(['middleware' => 'checkUserType:admin'], function () {
        Route::get('/dashboardAdmin', function () {
            return view('dashboard_admin/dashboard');
        });

        Route::get('/content-manage', function () {
            return view('dashboard_admin/dashboard_content_manage');
        });

        Route::get('/user-manage', function () {
            return view('dashboard_admin/dashboard_user_manage');
        });

        Route::get('/analytic', function () {
            return view('dashboard_admin/dashboard_analytic');
        });
    });

    // User Routes
    Route::group(['middleware' => 'checkUserType:user'], function () {
        Route::get('/home', function () {
            return view('dashboard_user/dashboardUser');
        });

        Route::get('/my-content', function () {
            return view('dashboard_user/dashboardUser_my_content');
        });

        Route::get('/my-profile', function () {
            return view('dashboard_user/dashboardUser_my_profile');
        });
    });
});

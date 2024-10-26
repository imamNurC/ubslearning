<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContentManageController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function() {
    $contents = DB::table('content')->get();
    dd($contents);
    return view ('welcome');
});


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Rout Untuk Menu Content Manage
Route::get('/content-manage', [ContentManageController::class, 'dataView'])->name('dashboard.Dashboard_content_manage');
Route::post('/content-manage', [ContentManageController::class, 'store']);
// Route::get('/register', [RegisterController::class, 'store']);

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout',[LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard_user/dashboardUser');
});

//dashboard admin
// Route::get('/dashboardAdmin', function () {
//     return view('dashboard/dashboard');
// })->middleware(['auth', 'admin']);

// Route::get('/content-manage', function () {
//     return view('dashboard/dashboard_content_manage');
// })->middleware(['auth', 'admin']);

// Route::get('/user-manage', function () {
//     return view('dashboard/dashboard_user_manage');
// })->middleware(['auth', 'admin']);

// Route::get('/analytic', function () {
//     return view('dashboard/dashboard_analytic');
// })->middleware(['auth', 'admin']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardAdmin', function () {
        return view('dashboard/dashboard');
    });

    Route::get('/content-manage', function () {
        return view('dashboard/dashboard_content_manage');
    });

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



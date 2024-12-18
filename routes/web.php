<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ContentManageController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserManageController;

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
Route::get('/logout', [LoginController::class, 'logout']);

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

    Route::get('/user-manage', [UserManageController::class, 'index'])->name('customers.index');
    Route::post('/confirm-purchase/{id}', [UserManageController::class, 'confirmPurchase'])->name('confirm.purchase');
    Route::post('/reject-purchase/{id}', [UserManageController::class, 'rejectPurchase'])->name('reject.purchase');
    Route::post('/admin/transactions/{transaction}/confirm', [UserManageController::class, 'confirmPurchase'])->name('confirm.purchase');
    Route::put('/transactions/{id}', [UserManageController::class, 'update'])->name('admin.transactions.update');


    Route::get('/analytic', function () {
        return view('dashboard_admin/dashboard_analytic');
    });

    Route::get('/analytic', [AnalyticsController::class, 'index'])->name('alan');
    Route::get('kta/register', 'App\Http\Controllers\kta\MentorRegistController@index');
    Route::post('kta/register', 'App\Http\Controllers\kta\MentorRegistController@register')->name('kta.register');
});



//dashboard user
Route::middleware(['auth', 'user'])->group(function () {

    // Route::get('/home', function () {
    //     return view('dashboard_user/dashboardUser');
    // });
    Route::get('/activate/{username}', ['App\Http\Controllers\ActivationEmailController@verifyActivation'])
        ->name('activation.verify')->middleware('signed');

    Route::get('/home/{username}', [ContentManageController::class, 'products'])->name('home');
    Route::get('/my-content/{username}', [CustomerController::class, 'showMyContent'])->name('my-content');
    Route::post('/update-view-count/{id}', [CustomerController::class, 'updateViewCount'])->name('update.view.count');
    Route::get('/popular-content', [CustomerController::class, 'showPopularContent'])->name('popular.content');
    Route::get('/product/{id}', [CustomerController::class, 'showProductDetails'])->name('product.details');
    Route::get('/my-profile/{username}', [CustomerController::class, 'showProfile'])->name('profile.show');
    Route::post('/my-profile/{username}/update', [CustomerController::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/{username}/change-password', [CustomerController::class, 'changePassword'])->name('profile.changePassword');
    Route::get('/purchase-form/{username}', [CustomerController::class, 'showPurchaseForm'])->name('purchaseForm.show');
    Route::post('/purchase', [CustomerController::class, 'PurchaseStore'])->name('purchase.store');
    Route::post('/save-product-to-session', [CustomerController::class, 'saveProductToSession']);
    Route::get('/check-transaction-status/{idCust}/{idCont}', [TransactionController::class, 'checkStatus']);
    Route::get('/check-accepted-req/{idCust}/{idCont}/{status}', [TransactionController::class, 'checkAccepted']);
    Route::post('/wa', [TransactionController::class, 'generateWhatsAppUrl']);
    Route::post('/declined-status/{idCust}/{idCont}/{status}', [TransactionController::class, 'updateSemuaDeclinedStatusReset']);
    Route::post('/accepted-status', [TransactionController::class, 'updateSemuaAcceptedStatusReset']);



    Route::get('/get-content-description/{id}', function ($id) {
        $product = App\Models\Content::find($id);
        return response()->json([
            'description' => $product->deskripsi,
        ]);
    });
});

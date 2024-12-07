<?php

use App\Http\Controllers\ContentManageController;
use App\Http\Controllers\kta\MentorLoginController;
use Illuminate\Support\Facades\Route;




// Route::get('/login', [MentorLoginController::class, 'index'])->name('login-mentor');
// Route::post('/login', [MentorLoginController::class, 'loginKta']);
// Route::get('/logout', [MentorLoginController::class, 'logoutMentor']);


Route::middleware(['auth:kta', 'mentor'])->group(function () {

    Route::get('/anggota-kta', function () {
        $members = collect();
        return view('kta_modul.memberList', compact('members'));
    });

    // Route::get('/list-all', 'App\Http\Controllers\kta\MentorLoginController@listMembers')->name('members.list');
    Route::post('/search', 'App\Http\Controllers\kta\MentorRegistController@search')->name('members.search');
});

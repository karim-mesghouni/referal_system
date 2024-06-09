<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Client\ClientController;
use Illuminate\Support\Facades\Route;


//
//
//Route::prefix('/users')->group(function () {
//    Route::post('/', [UserReferralProgramController::class, 'store']);
//    Route::get('/{user}/referrals', [UserReferralProgramController::class, 'fetchUserReferral']);
//});


Route::prefix('auth/')->name('auth.')->controller(AuthController::class)->group(function () {
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
});


Route::middleware("auth:sanctum")->group(function () {
    Route::get("client/referralCode", [ClientController::class, "generateReferralCode"])->name("generateReferralCode");
});

Route::get("client/checkReferralCode", [ClientController::class, "checkReferralCode"])->name("checkReferralCode");


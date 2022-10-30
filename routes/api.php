<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::middleware(['lang'])->group(callback: function () {

    Route::post('/register', [AuthController::class, 'register']); //register

    Route::post('verify/email/code', [AuthController::class, 'verifyEmailCodeCorrect']); //verify Email Code Correct

    Route::post('send/code/reset/password', [AuthController::class, 'sendCodeResetPassword']); //sendCodeResetPassword

    Route::post('verify/password/code', [AuthController::class, 'verifyPasswordCodeCorrect']); //verify Password Code Correct

    Route::post('reset/password', [AuthController::class, 'resetPassword']); //resetPassword


    Route::post('login', [AuthController::class, 'login']); //login

    Route::post('resend/code', [AuthController::class, 'resendCode']); //resend Code





    Route::middleware(['auth:sanctum', 'verified'])->group(callback: function () {

    });

});



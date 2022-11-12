<?php

use App\Http\Controllers\Api\{AdsController,
    AuthController,
    EditInformationController,
    GuestController,
    OfferController,
    ProductBranchController,
    ProductController,
    ServiceBranchController,
    ServiceController,
    NotificationsController,

};
use Illuminate\Support\Facades\Route;

Route::middleware(['lang'])->group(function () {

    Route::post('register', [GuestController::class, 'register']); //register

    Route::post('verify/email/code', [GuestController::class, 'verifyEmailCodeCorrect']); //verify Email Code Correct

    Route::post('send/code/reset/password', [GuestController::class, 'sendCodeResetPassword']); //sendCodeResetPassword

    Route::post('verify/password/code', [GuestController::class, 'verifyPasswordCodeCorrect']); //verify Password Code Correct

    Route::post('reset/password', [GuestController::class, 'resetPassword']); //resetPassword

    Route::post('resend/code', [GuestController::class, 'resendCode']); //resend Code

    Route::post('login', [GuestController::class, 'login']); //login

    Route::post('register/social', [GuestController::class, 'registerSocial']); //register Social

    Route::post('login/social', [GuestController::class, 'loginSocial']); //login Social

    //Ads
    Route::get('ads', [AdsController::class, 'allAds']); //ads

    //Products
    Route::get('all/main/product', [ProductBranchController::class, 'allMainProduct']); //all Main Product

    Route::get('all/sub/product', [ProductController::class, 'allSubProduct']); //all Sub Product

    Route::post('all/sub/product/belong/main/product', [ProductController::class, 'all_sub_product_belong_main_product']); //all sub product belong main product

    Route::post('one/sub/product', [ProductController::class, 'oneSubProduct']); //one Sub Product

    //Services
    Route::get('all/main/service', [ServiceBranchController::class, 'allMainService']); //all Main Service

    Route::get('all/sub/service', [ServiceController::class, 'allSubService']); //all Sub Service

    Route::post('all/sub/service/belong/main/service', [ServiceController::class, 'all_sub_service_belong_main_service']); //all sub Service belong main Service

    Route::post('one/sub/service', [ServiceController::class, 'oneSubService']); //one Sub Service

    //offers
    Route::get('all/offers', [OfferController::class, 'allOffers']); //all Offers

    Route::middleware(['auth:sanctum', 'verified'])->group(callback: function () {

        //User
        Route::get('user/info', [AuthController::class, 'userInfo']); //userInfo

        //Edit Name
        Route::post('edit/name', [EditInformationController::class, 'editName']); //edit Name

        //Edit email
        Route::post('edit/email', [EditInformationController::class, 'editEmail']); //edit Email
        Route::post('check/code/to/change/email', [EditInformationController::class, 'changeEmail']); //change Email

        //Edit phone
        Route::post('edit/phone', [EditInformationController::class, 'editPhone']); //edit Phone

        //Edit password
        Route::post('edit/password', [EditInformationController::class, 'editPassword']); //edit Password

        //all Notification
        Route::post('all/notification', [NotificationsController::class, 'allNotification']); //all Notification
    });

});



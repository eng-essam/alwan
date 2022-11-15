<?php

use App\Http\Controllers\Api\{AddressController,
    AdsController,
    AuthController,
    BuyProductController,
    CartController,
    EditInformationController,
    FavoriteController,
    GuestController,
    NotificationsController,
    OfferController,
    ProductBranchController,
    ProductController,
    ServiceBranchController,
    ServiceController,
    CompanyBranchController,
};
use Illuminate\Support\Facades\Route;

Route::get('test', function () {

}); //test


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

        //Auth
        Route::get('user/info', [AuthController::class, 'userInfo']); //userInfo

        Route::get('delete/account', [AuthController::class, 'deleteAccount']); //delete Account

        Route::get('logout', [AuthController::class, 'logout']); //Logout

        //Edit Information
        Route::post('edit/name', [EditInformationController::class, 'editName']); //edit Name

        Route::post('edit/email', [EditInformationController::class, 'editEmail']); //edit Email

        Route::post('check/code/to/change/email', [EditInformationController::class, 'changeEmail']); //change Email

        Route::post('edit/phone', [EditInformationController::class, 'editPhone']); //edit Phone

        Route::post('edit/password', [EditInformationController::class, 'editPassword']); //edit Password

        //Notification
        Route::get('all/notifications', [NotificationsController::class, 'allNotification']); //all Notification

        Route::get('delete/all/notifications', [NotificationsController::class, 'deleteAllNotification']); //delete All Notification

        Route::post('delete/one/notification', [NotificationsController::class, 'deleteOneNotification']); //delete One Notification

        Route::get('number/of/notifications', [NotificationsController::class, 'numberOfNotification']); //number Of Notification

        //addresses
        Route::post('add/address', [AddressController::class, 'addAddress']); //add Address

        Route::get('all/addresses', [AddressController::class, 'allAddresses']); //all Address

        Route::post('set/default/address', [AddressController::class, 'setDefaultAddress']); //set Default Address

        //Favorites
        Route::get('all/product/favorites', [FavoriteController::class, 'allFavorites']); //all Favorites

        Route::post('add/product/favorite', [FavoriteController::class, 'addProductFavorite']); //add Product Favorite

        Route::post('delete/product/favorite', [FavoriteController::class, 'deleteProductFavorite']); //delete Product Favorite

        //Cart
        Route::get('all/product/carts', [CartController::class, 'allCarts']); //all Favorites

        Route::post('add/product/cart', [CartController::class, 'addProductCart']); //add Product Cart

        Route::post('delete/product/cart', [CartController::class, 'deleteProductCart']); //delete Product Cart

        //Buy Product
        Route::post('buy/products', [BuyProductController::class, 'buyProducts']); //buy Products

        //Company branch
        Route::get('all/company/branch', [CompanyBranchController::class, 'allCompanyBranch']); //all Company Branch

    });

});



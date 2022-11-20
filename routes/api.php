<?php

use App\Http\Controllers\Api\{AdController,
    AddressController,
    AuthController,
    BuyProductController,
    CartController,
    CompanyBranchController,
    EditInformationController,
    FavoriteController,
    GuestController,
    NotificationsController,
    OfferController,
    OrderController,
    ProductBranchController,
    ProductController,
    ServiceBranchController,
    ServiceController,
    CobonController,
    ContactController,
    BuyServiceController,

};
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    $json = '{"John":20,"Harry":30,"Dave":40,"Tony":50}';

    print_r(json_decode($json,true));
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
    Route::get('ads', [AdController::class, 'allAds']); //ads

    //Products
    Route::get('all/main/product', [ProductBranchController::class, 'allMainProduct']); //all Main Product

    Route::get('all/sub/product', [ProductController::class, 'allSubProduct']); //all Sub Product

    Route::post('all/sub/product/belong/main/product', [ProductController::class, 'allSubProductBelongMainProduct']); //all sub product belong main product

    Route::post('one/sub/product', [ProductController::class, 'oneSubProduct']); //one Sub Product

    Route::post('search/sub/product', [ProductController::class, 'searchSubProduct']); //search Sub Product

    Route::post('search/main/product', [ProductController::class, 'searchMainProduct']); //search Main Product

    //Services
    Route::get('all/main/service', [ServiceBranchController::class, 'allMainService']); //all Main Service

    Route::get('all/sub/service', [ServiceController::class, 'allSubService']); //all Sub Service

    Route::post('all/sub/service/belong/main/service', [ServiceController::class, 'allSubServiceBelongMainService']); //all sub Service belong main Service

    Route::post('one/sub/service', [ServiceController::class, 'oneSubService']); //one Sub Service

    Route::post('search/sub/service', [ServiceController::class, 'searchSubService']); //search Sub Service

    Route::post('search/main/service', [ServiceController::class, 'searchMainService']); //search Main Service

    //Offers
    Route::get('all/offers', [OfferController::class, 'allOffers']); //all Offers

    //Contact
    Route::post('contact/us', [ContactController::class, 'contactUs']); //contact Us

    Route::middleware(['auth:sanctum', 'verified'])->group(callback: function () {

        //Company branch
        Route::get('all/company/branch', [CompanyBranchController::class, 'allCompanyBranch']); //all Company Branch

        //Auth
        Route::get('user/info', [AuthController::class, 'userInfo']); //userInfo

        Route::get('delete/account', [AuthController::class, 'deleteAccount']); //delete Account

        Route::get('logout', [AuthController::class, 'logout']); //Logout

        //Edit Information
        Route::post('edit/name', [EditInformationController::class, 'editName']); //edit Name

        Route::post('edit/email', [EditInformationController::class, 'editEmail']); //edit Email

        Route::post('check/code/to/change/email', [EditInformationController::class, 'changeEmail']); //change Email

        Route::post('edit/phone', [EditInformationController::class, 'editPhone']); //edit Phone

        Route::post('edit/img', [EditInformationController::class, 'editImg']); //edit Img

        Route::post('edit/password', [EditInformationController::class, 'editPassword']); //edit Password

        //Notifications
        Route::get('all/notifications', [NotificationsController::class, 'allNotification']); //all Notification

        Route::get('delete/all/notifications', [NotificationsController::class, 'deleteAllNotification']); //delete All Notification

        Route::post('delete/one/notification', [NotificationsController::class, 'deleteOneNotification']); //delete One Notification

        Route::get('number/of/notifications', [NotificationsController::class, 'numberOfNotification']); //number Of Notification

        //addresses
        Route::post('add/address', [AddressController::class, 'addAddress']); //add Address

        Route::get('all/addresses', [AddressController::class, 'allAddresses']); //all Address

        //Favorites
        Route::get('all/product/favorites', [FavoriteController::class, 'allFavorites']); //all Favorites

        Route::post('add/product/favorite', [FavoriteController::class, 'addProductFavorite']); //add Product Favorite

        Route::post('delete/product/favorite', [FavoriteController::class, 'deleteProductFavorite']); //delete Product Favorite

        //Cart
        Route::get('all/product/carts', [CartController::class, 'allCarts']); //all Favorites

        Route::post('add/product/cart', [CartController::class, 'addProductCart']); //add Product Cart

        Route::post('delete/product/cart', [CartController::class, 'deleteProductCart']); //delete Product Cart

        //Cobons
        Route::post('check/cobon', [CobonController::class, 'checkCobon']); //checkCobon

        //service Request
        Route::post('service/request', [OrderController::class, 'serviceRequest']); //service Request

        Route::post('resend/service/request', [OrderController::class, 'resendServiceRequest']); //resend Service Request

        //Buy Product
        Route::post('buy/products', [BuyProductController::class, 'buyProducts']); //buy Products

        Route::post('buy/service', [BuyServiceController::class, 'buyService']); //buy Service


        //Order Products
        Route::get('all/order/products', [OrderController::class, 'allOrderProducts']); //all Order Products

        Route::get('all/order/products/done', [OrderController::class, 'allOrderProductsDone']); //all Order Products Done

        Route::get('all/order/services', [OrderController::class, 'allOrderServices']); //all Order Services

        Route::get('all/order/services/done', [OrderController::class, 'allOrderServicesDone']); //all Order Services Done
    });

});



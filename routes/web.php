<?php

use App\Http\Controllers\Admin\{AdminController,
    AllServiceOrderController,
    HomeController,
    MainProductsController,
    MainServicesController,
    SubProductsController,
    SubServicesController,
    UsersController,
};
use App\Http\Controllers\Admin\LangController;
use Illuminate\Support\Facades\Route;


Route::get('test', function () {

});

Auth::routes(['register' => false]);

Route::get('lang/set/{lang}', [LangController::class, 'setLang']);

Route::get('/', function () {
    Auth::logout();
    return Redirect(url('login'));
});


Route::prefix('admin')->middleware(['auth', 'adminAndSuperAdmin', 'langWeb'])->group(function () {

    Route::get('/home', [HomeController::class, 'adminHome']);//home

    Route::get('/all-users', [UsersController::class, 'allUsers']);//all users

    Route::middleware('superAdmin')->group(function () {
        //Admin
        Route::get('/all-admins', [AdminController::class, 'allAdmin']);//all Admin

        Route::get('/add-admin', [AdminController::class, 'addAdmin']);//add Admin

        Route::post('/add-admin', [AdminController::class, 'saveAddAdmin']);//save Admin

        Route::get('/edit-admin/{adminId}', [AdminController::class, 'editAdmin']);//edit Admin

        Route::post('/edit-admin/{adminId}', [AdminController::class, 'saveEditAdmin']);//save Edit Admin

        //Services
        Route::get('/all-main/services', [MainServicesController::class, 'allMainServices']);//all Main Services

        //Products
        Route::get('/all-main/products', [MainProductsController::class, 'allMainProducts']);//all Main Products
    });

    //Sub Products and Sub Services
    Route::get('/all-sub/products', [SubProductsController::class, 'allSubProducts']);//all Sub Products

    Route::get('/all-sub/services', [SubServicesController::class, 'allSubServices']);//all Sub Services

    Route::get('/edit-sub/product/{product}', [SubProductsController::class, 'editSubProduct']);//edit Sub Product

    Route::post('/edit-sub/product/{product}', [SubProductsController::class, 'saveEditSubProduct']);//edit Sub Product

    //Service Order and Product Order
    Route::get('/all-service-order', [AllServiceOrderController::class, 'allServiceOrder']);//all Service Order


});





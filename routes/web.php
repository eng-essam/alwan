<?php

use App\Http\Controllers\Admin\{AdminController,
    HomeController,
    MainProductsController,
    MainServicesController,
    UsersController
};
use App\Http\Controllers\Admin\LangController;
use Illuminate\Support\Facades\Route;


Route::get('test', function () {
    toastr()->error('Oops! Something went wrong!');
    toastr()->warning('Are you sure you want to proceed ?');


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

        Route::get('/all-main/subServices', [MainServicesController::class, 'allMainServices']);//all Main Services

        Route::get('/all-main/subProducts', [MainProductsController::class, 'allMainProducts']);//all Main Products


    });

});





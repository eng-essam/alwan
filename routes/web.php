<?php

use App\Http\Controllers\Admin\{AdminController, HomeController, UsersController};
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

    Route::get('/all-admins', [AdminController::class, 'allAdmin']);//all Admin

});





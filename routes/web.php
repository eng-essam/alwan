<?php

use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('test', function () {

});

Route::get('lang/set/{lang}', [LangController::class, 'setLang']);

Route::get('/', function () {
    Auth::logout();
    return Redirect(url('login'));
});

Auth::routes(['register' => false]);


Route::prefix('superAdmin')->middleware(['auth', 'userAccess:superAdmin', 'langWeb'])->group(function () {
    Route::get('/home', [HomeController::class, 'superAdminHome']);
});


Route::prefix('admin')->middleware(['auth', 'userAccess:admin', 'langWeb'])->group(function () {
    Route::get('/home', [HomeController::class, 'adminHome']);
});






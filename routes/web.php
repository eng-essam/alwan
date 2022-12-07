<?php

use App\Http\Controllers\Admin\{AdminController,
    AllProductOrderController,
    AllServiceOrderController,
    HomeController,
    MainProductsController,
    MainServicesController,
    SubProductsController,
    SubServicesController,
    UsersController,
    CompanyBranchesController,
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
Route::get('/400', function () {
    return view('inc.404');
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

        //Company Branches
        Route::get('/all/company-branches', [CompanyBranchesController::class, 'allCompanyBranches']);//all Company Branches

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
    Route::get('/all-service-orders', [AllServiceOrderController::class, 'allServiceOrders'])->middleware('receiveOrders');//all Service Order

    Route::get('/all-approval-services', [AllServiceOrderController::class, 'allApprovalServices'])->middleware('approvalServices');//all Approval Services

    Route::get('/all-sorting-service-orders', [AllServiceOrderController::class, 'allSortingServiceOrders'])->middleware('sortingOrder');//all Sorting Service Order

    Route::get('/all-execute-service-orders', [AllServiceOrderController::class, 'allExecuteServiceOrders'])->middleware('executeOrder');//all Execute Service Order

    Route::get('/all-storage-service-orders', [AllServiceOrderController::class, 'allStorageServiceOrders'])->middleware('storageOrder');//all Storage Service Order

    Route::get('/all-delivered-service-orders', [AllServiceOrderController::class, 'allDeliveredServiceOrders'])->middleware('deliveredOrder');//all Delivered Service Order

    //Product Order
    Route::get('/all-sorting-product-orders', [AllProductOrderController::class, 'allSortingProductOrders'])->middleware('receiveOrders');//all Sorting Product Order

    Route::get('/all-execute-product-orders', [AllProductOrderController::class, 'allExecuteProductOrders'])->middleware('executeOrder');//all execute Product Order

    Route::get('/all-storage-product-orders', [AllProductOrderController::class, 'allStorageProductOrders'])->middleware('storageOrder');//all storage Product Order

    Route::get('/all-delivered-product-orders', [AllProductOrderController::class, 'allDeliveredProductOrders'])->middleware('deliveredOrder');//all delivered Product Order

});





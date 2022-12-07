<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AllProductOrderController extends Controller
{
    public function allSortingProductOrders()
    {
        return view('dashboard.productOrder.allSortingProductOrders');
    }

    public function allExecuteProductOrders()
    {
        return view('dashboard.productOrder.allExecuteProductOrders');
    }

    public function allStorageProductOrders()
    {
        return view('dashboard.productOrder.allStorageProductOrders');
    }

    public function allDeliveredProductOrders()
    {
        return view('dashboard.productOrder.allDeliveredProductOrders');
    }
}
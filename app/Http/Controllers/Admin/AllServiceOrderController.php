<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AllServiceOrderController extends Controller
{
    public function allServiceOrders()
    {
        return view('dashboard.serviceOrder.allServiceOrder');
    }

    public function allApprovalServices()
    {
        return view('dashboard.serviceOrder.allApprovalServices');
    }

    public function allSortingServiceOrders()
    {
        return view('dashboard.serviceOrder.allSortingOrder');
    }

    public function allExecuteServiceOrders()
    {
        return view('dashboard.serviceOrder.allExecuteOrder');
    }

    public function allStorageServiceOrders()
    {
        return view('dashboard.serviceOrder.allStorageOrder');
    }

    public function allDeliveredServiceOrders()
    {
        return view('dashboard.serviceOrder.allDeliveredOrder');
    }
}
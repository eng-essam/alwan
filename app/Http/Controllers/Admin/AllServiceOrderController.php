<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuyService;

class AllServiceOrderController extends Controller
{
    public function allServiceOrder()
    {
        return view('dashboard.serviceOrder.allServiceOrder');
    }
}
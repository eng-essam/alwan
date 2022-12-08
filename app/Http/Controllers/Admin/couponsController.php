<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class couponsController extends Controller
{
    public function allCoupons()
    {
        return view('dashboard.coupon.allCoupons');
    }
}
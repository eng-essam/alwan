<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SubServicesController extends Controller
{
    public function allSubServices()
    {
        return view('dashboard.services.allSubServices');
    }
}
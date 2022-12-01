<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service_branch;

class MainServicesController extends Controller
{
    public function allMainServices()
    {
        return view('dashboard.mainServices.allMainServices');
    }
}
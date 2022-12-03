<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SubProductsController extends Controller
{
    public function allSubProducts()
    {
        return view('dashboard.products.allSubProducts');
    }
}
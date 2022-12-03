<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MainProductsController extends Controller
{
    public function allMainProducts()
    {
        return view('dashboard.products.allMainProducts');
    }
}
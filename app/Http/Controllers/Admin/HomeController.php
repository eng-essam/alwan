<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuyProduct;
use App\Models\BuyService;
use App\Models\Product;
use App\Models\Product_branch;
use App\Models\Service;
use App\Models\Service_branch;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminHome()
    {
        $data['users'] = User::where('role_id', 3)->count();
        $data['admins'] = User::where('role_id', 2)->count();
        $data['subServices'] = Service::count();
        $data['mainServices'] = Service_branch::count();
        $data['subProducts'] = Product::count();
        $data['mainProducts'] = Product_branch::count();
        $data['servicesPendingApproval'] = BuyService::where('order_status_id', 1)->count();
        $data['servicesPendingCustomerPayment'] = BuyService::where('order_status_id', 3)->count();
        $data['ServicesSortingStage'] = BuyService::where('order_status_id', 4)->count();
        $data['ProductsSortingStage'] = BuyProduct::where('order_status_id', 4)->count();
        $data['ServicesStoreingStage'] = BuyService::where('order_status_id', 5)->count();
        $data['ProductsStoreingStage'] = BuyProduct::where('order_status_id', 5)->count();

        return view('home.adminHome')->with($data);
    }

}

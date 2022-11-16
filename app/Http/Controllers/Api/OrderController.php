<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuyProductResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allOrderProducts(Request $request)
    {
        $user = User::where('id', 33)->with('payProducts')->first();
        $allOrders = json_decode($user)->pay_products;

        foreach ($allOrders as $key => $oneOrder) {
//            echo 'product_id: ' . $allOrders[$key]->id . ' | ';
//            echo 'product_name: ' . json_decode($allOrders[$key]->product_name)->ar . ' | ';
//            echo 'product_img: ' . asset('uploads/' . $allOrders[$key]->product_img)  . ' | ';
//            echo 'product_desc: ' . json_decode($allOrders[$key]->product_desc)->ar . ' | ';
            echo new ProductResource(Product::findOrFail($allOrders[$key]->id));
           //echo $allOrders[$key]->pivot->user_id;
        }
    }
}

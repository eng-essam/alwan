<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuyProductResource;
use App\Http\Resources\OrderStatusResource;
use App\Models\Company_branch;
use App\Models\OrderStatus;
use App\Models\User;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class OrderController extends Controller
{
    use ReturnJson;

    public function allOrderProducts(Request $request)
    {
        $lang = App::getLocale();
        $user = User::where('id', 33)->with('payProducts')->first();
        $allOrders = json_decode($user)->pay_products;
        $orders = [];

        foreach ($allOrders as $key => $oneOrder) if ($allOrders[$key]->pivot->order_status_id != 6) {
            $orders[$key]['product_id'] = $allOrders[$key]->id;
            $orders[$key]['product_name'] = json_decode($allOrders[$key]->product_name)->$lang;
            $orders[$key]['product_img'] = asset('uploads/' . $allOrders[$key]->product_img);
            $orders[$key]['product_desc'] = json_decode($allOrders[$key]->product_desc)->$lang;
            $orders[$key]['Company_branch'] = json_decode(Company_branch::findOrFail($allOrders[$key]->company_branch_id)
                ->pluck('company_name')->first())->$lang;
            $orders[$key]['Order_id'] = $allOrders[$key]->pivot->order_id;
            $orders[$key]['Order_quantity'] = $allOrders[$key]->pivot->product_quantity;
            $orders[$key]['Order_price'] = $allOrders[$key]->pivot->product_price;
            $orders[$key]['Order_Status'] = new OrderStatusResource(OrderStatus::findOrFail($allOrders[$key]->pivot->order_status_id));
        }
        $data['allOrders'] = $orders;
        return $this->requestSuccess(null, $data);
    }

    public function allOrderProductsDone(Request $request)
    {
        $lang = App::getLocale();
        $user = User::where('id', 33)->with('payProducts')->first();
        $allOrders = json_decode($user)->pay_products;
        $orders = [];

        foreach ($allOrders as $key => $oneOrder) if ($allOrders[$key]->pivot->order_status_id == 6) {
            $orders[$key]['product_id'] = $allOrders[$key]->id;
            $orders[$key]['product_name'] = json_decode($allOrders[$key]->product_name)->$lang;
            $orders[$key]['product_img'] = asset('uploads/' . $allOrders[$key]->product_img);
            $orders[$key]['product_desc'] = json_decode($allOrders[$key]->product_desc)->$lang;
            $orders[$key]['Company_branch'] = json_decode(Company_branch::findOrFail($allOrders[$key]->company_branch_id)
                ->pluck('company_name')->first())->$lang;
            $orders[$key]['Order_id'] = $allOrders[$key]->pivot->order_id;
            $orders[$key]['Order_quantity'] = $allOrders[$key]->pivot->product_quantity;
            $orders[$key]['Order_price'] = $allOrders[$key]->pivot->product_price;
            $orders[$key]['Order_Status'] = new OrderStatusResource(OrderStatus::findOrFail($allOrders[$key]->pivot->order_status_id));
        }
        $data['allOrders'] = $orders;
        return $this->requestSuccess(null, $data);
    }

    public function serviceRequest(Request $request){

    }
}

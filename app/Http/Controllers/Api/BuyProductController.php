<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BuyProduct;
use App\Models\Cart;
use App\Traits\ReturnJson;
use App\Traits\SendNotification;
use App\Traits\TransferFilesFromCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuyProductController extends Controller
{
    use ReturnJson, TransferFilesFromCart, SendNotification;

    public function buyProducts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'products' => ['required', 'json'],
            'address_id' => ['required', 'numeric'],
            'discountPercentage' => ['nullable', 'numeric']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $discount = 1;
        if ($request->discountPercentage != null) {
            $discount = 1 - ($request->discountPercentage / 100);
        }
        $allProduct = json_decode($request->products, true);
        foreach ($allProduct as $key => $valu) {
            $order = BuyProduct::create([
                'user_id' => $request->user()->id,
                'product_id' => $allProduct[$key]['product_id'],
                'order_id' => rand(10000000, 99999999),
                'product_quantity' => $allProduct[$key]['quantity'],
                'product_price' => $allProduct[$key]['price'] * $discount,
                'address_id' => $request->address_id,
                'details' => $this->transferDetails($request->user()->id, $allProduct[$key]['product_id']),
                'user_file' => $this->transferUserFile($request->user()->id, $allProduct[$key]['product_id']),
                'order_status_id' => 5,
            ]);
            $this->sendUserNotification($order->user_id, 4, $order->order_id);
            $this->sendUserNotification($order->user_id, 5, $order->order_id);
        }

        Cart::where('user_id', $request->user()->id)->delete();
        return $this->requestSuccess(__('lang.payment_successfully'));

    }
}

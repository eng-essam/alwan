<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\BuyProduct;
use App\Models\Cart;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuyProductController extends Controller
{
    use ReturnJson;

    public function buyProducts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'products' => ['required', 'array'],
            'address_id' => ['required','numeric'],
            'discountPercentage' => ['nullable','numeric']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $allProduct = $request->products;
        foreach ($allProduct as $key => $valu) {
            BuyProduct::create([
                'user_id' => $request->user()->id,
                'product_id' => $allProduct[$key]['product_id'],
                'order_id' => rand(10000000, 99999999),
                'product_quantity' => $allProduct[$key]['quantity'],
                'product_price' => $allProduct[$key]['price'],
                'address_id' => $request->address_id,
                'order_status_id' => 1,
            ]);
        }

        Cart::where('user_id', $request->user()->id)->delete();
        return $this->requestSuccess(__('lang.payment_successfully'));

    }
}

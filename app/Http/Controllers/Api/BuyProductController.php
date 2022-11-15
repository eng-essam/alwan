<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
            'products' => ['required','array'],
            'pay_method' => ['required', 'in:card,home,branch'],
            'address_id' => ['nullable', 'exists:addresses,id'],
            'company_branch_id' => ['nullable', 'exists:company_branches,id'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $allProduct = $request->products;
        foreach ($allProduct as $key => $valu) {
            BuyProduct::create([
                'user_id' => $request->user()->id,
                'product_id' => $allProduct[$key]['product_id'],
                'product_quantity' => $allProduct[$key]['quantity'],
                'product_price' => $allProduct[$key]['price'],
                'pay_method' => $request->pay_method,
                'address_id' => $request->address_id,
                'company_branch_id' => $request->company_branch_id,
                'order_status_id' => 1,
            ]);
        }

        Cart::where('user_id', $request->user()->id)->delete();

        return $this->requestSuccess(__('lang.payment_successfully'));

    }
}

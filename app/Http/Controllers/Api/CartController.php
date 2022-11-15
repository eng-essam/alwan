<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    use ReturnJson;

    public function allCarts(Request $request)
    {
        $data = [
            'allCarts' => ProductResource::collection($request->user()->cartProducts),
        ];
        return $this->requestSuccess(null, $data);
    }

    public function addProductCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'integer', 'exists:products,id']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $request->user()->cartProducts()->attach($request->product_id, [
            'user_id' => $request->user()->id,
            'product_id' => $request->product_id,
        ]);

        return $this->requestSuccess(__('lang.add_product_carts_successfully'));

    }

    public function deleteProductCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'integer', 'exists:products,id']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $request->user()->cartProducts()->detach([
            'user_id' => $request->user()->id,
            'product_id' => $request->product_id,
        ]);

        return $this->requestSuccess(__('lang.delete_product_carts_successfully'));

    }
}

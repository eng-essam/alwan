<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Cart;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'file' => ['required', 'file', 'max:30720'],
            'message' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $product = Cart::where('user_id', $request->user()->id)
            ->where('product_id', $request->product_id)->first();
        if ($product) {
            return $this->requestFails(__('lang.product_already_in_cart'));
        }

        $pathFile = Storage::disk('uploads')->put('files', $request->file);
        $request->user()->cartProducts()->attach($request->product_id, [
            'user_id' => $request->user()->id,
            'product_id' => $request->product_id,
            'file' => $pathFile,
            'message' => $request->message,
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

        $cart = Cart::where('user_id', $request->user()->id)
            ->where('product_id', $request->product_id)->first();

        Storage::disk('uploads')->delete($cart->file);
        $cart->delete();

        return $this->requestSuccess(__('lang.delete_product_carts_successfully'));

    }
}

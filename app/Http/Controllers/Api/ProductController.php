<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    use ReturnJson;

    public function allSubProduct()
    {
        return $this->requestSuccess(null, ProductResource::collection(Product::get()));
    }

    public function all_sub_product_belong_main_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mainProductId' => ['required', 'numeric', 'exists:product_branches,id'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }
        return $this->requestSuccess(null,
            ProductResource::collection(Product::where('product_branch_id', $request->mainProductId)->get()
            ));
    }

    public function oneSubProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subProductId' => ['required', 'numeric', 'exists:products,id'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }
        return $this->requestSuccess(null, new ProductResource(Product::findOrFail($request->subProductId)));
    }


}

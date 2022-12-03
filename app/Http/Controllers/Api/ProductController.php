<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product_branchResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Product_branch;
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

    public function allSubProductBelongMainProduct(Request $request)
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

    public function searchSubProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subProductName' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        return $this->requestSuccess(null,
            ProductResource::collection(Product::where('product_name->ar', 'like', "%$request->subProductName%")
                ->orWhere('product_name->en', 'like', "%$request->subProductName%")->get()));
    }

    public function searchMainProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mainProductName' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        return $this->requestSuccess(null,
            Product_branchResource::collection(Product_branch::where('product_branch_name->ar', 'like', "%$request->mainProductName%")
                ->orWhere('product_branch_name->en', 'like', "%$request->mainProductName%")->get()));
    }

}

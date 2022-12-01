<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product_branchResource;
use App\Models\Product_branch;
use App\Traits\ReturnJson;

class ProductBranchController extends Controller
{
    use ReturnJson;

    public function allMainProduct()
    {
        return $this->requestSuccess(null, Product_branchResource::collection(Product_branch::where('active',1)->get()));
    }
}

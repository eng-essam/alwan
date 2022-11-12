<?php

namespace App\Http\Resources;

use App\Models\Product_branch;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Product_branch */
class Product_branchResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'MainProductName' => $this->product_branch_name(),
            'MainProductDesc' => $this->product_branch_desc(),
            'MainProductImg' => asset("uploads/$this->product_branch_img"),
            'numberOfProduct' => $this->products()->count(),
        ];
    }
}

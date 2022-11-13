<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Product */
class ProductResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'productName' => $this->product_name(),
            'productDesc' => $this->product_desc(),
            'ProductQuantityPrice' => json_decode($this->Product_quantity_price) ,
            'productImg' => asset("uploads/$this->product_img"),
            'mainProductName' => $this->product_branch->product_branch_name(),
            'companyName' => $this->company_branch->company_name(),
        ];
    }
}

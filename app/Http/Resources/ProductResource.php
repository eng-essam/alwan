<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

/** @mixin Product */
class ProductResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        $lang = App::getLocale();
        return [
            'id' => $this->id,
            'productName' => $this->product_name($lang),
            'productDesc' => $this->product_desc($lang),
            'productPrice' => $this->Product_price,
            'productImg' => asset("uploads/$this->product_img"),
            'mainProductName' => $this->product_branch->product_branch_name($lang),
            'companyName' => $this->company_branch->company_name($lang),
        ];
    }
}

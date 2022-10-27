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
            'product_name' => $this->product_name($lang),
            'product_desc' => $this->product_desc($lang),
            'Product_price' => $this->Product_price,
            'product_branch_name' => $this->product_branch->product_branch_name($lang),
            'company_branch_name' => $this->company_branch->company_name($lang),
            'product_img' => asset("uploads/$this->product_img"),
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

/** @mixin \App\Models\Product_branch */
class Product_branchResource extends JsonResource
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
            'product_branch_name' => $this->product_branch_name($lang),
            'product_branch_img' => asset("uploads/$this->product_branch_img") ,
        ];
    }
}

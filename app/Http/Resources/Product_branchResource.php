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
            'MainProductName' => $this->product_branch_name($lang),
            'MainProductImg' => asset("uploads/$this->product_branch_img"),
            'numberOfProduct' => $this->products()->count(),
        ];
    }
}

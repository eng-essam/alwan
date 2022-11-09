<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ServiceResource;
use App\Models\Product;
use App\Models\Service;
use App\Traits\ReturnJson;

class OfferController extends Controller
{
    use ReturnJson;

    public function allOffers()
    {
        $data = [
            'productOffers' => ProductResource::collection(Product::where('is_offer', 1)->get()),
            'serviceOffers' => ServiceResource::collection(Service::where('is_offer', 1)->get()),
        ];
        return $this->requestSuccess(null, $data);
    }
}

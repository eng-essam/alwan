<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdResource;
use App\Models\Ad;
use App\Traits\ReturnJson;

class AdController extends Controller
{
    use ReturnJson;

    public function allAds()
    {
        return $this->requestSuccess(null, AdResource::collection(Ad::get()));
    }

}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Service_branchResource;
use App\Models\Service_branch;
use App\Traits\ReturnJson;

class ServiceBranchController extends Controller
{
    use ReturnJson;

    public function allMainService()
    {
        return $this->requestSuccess(null, Service_branchResource::collection(Service_branch::where('active',1)->get()));
    }
}

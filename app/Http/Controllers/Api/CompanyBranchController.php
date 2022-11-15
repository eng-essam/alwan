<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Company_branchResource;
use App\Models\Company_branch;
use App\Traits\ReturnJson;

class CompanyBranchController extends Controller
{
    use ReturnJson;

    public function allCompanyBranch()
    {
        return $this->requestSuccess(null, Company_branchResource::collection(Company_branch::get()));
    }
}

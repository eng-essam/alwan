<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CompanyBranchesController extends Controller
{
    public function allCompanyBranches()
    {
        return view('dashboard.companyBranche.allCompanyBranches');
    }
}

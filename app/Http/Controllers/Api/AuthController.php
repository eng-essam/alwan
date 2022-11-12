<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ReturnJson;

    public function userInfo(Request $request)
    {
        return $this->requestUserInformation($request->user()->id);
    }

}

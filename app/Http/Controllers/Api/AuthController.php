<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Email_code;
use App\Models\User;
use App\Traits\CreateImg;
use App\Traits\DeletUserWithEmailNotVerified;
use App\Traits\ReturnJson;
use App\Traits\SendCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


}

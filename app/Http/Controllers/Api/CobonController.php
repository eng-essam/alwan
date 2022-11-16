<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cobon;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CobonController extends Controller
{
    use ReturnJson;

    public function checkCobon(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cobon' => ['required', 'exists:cobons,cobon'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }
        $data['percentage'] = $percentage = Cobon::where('cobon', $request->cobon)->pluck('percentage')->first();

        return $this->requestSuccess(__('lang.discount_rate') . ' %' . $data['percentage']  , $data);
    }
}

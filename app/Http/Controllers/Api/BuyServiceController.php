<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BuyService;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuyServiceController extends Controller
{
    use ReturnJson;

    public function buyService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => ['required'],
            'address_id' => ['required', 'numeric'],
            'service_price' => ['required'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        BuyService::where('order_id', $request->order_id)->update([
            'address_id' => $request->address_id,
            'service_price' => $request->service_price,
            'order_status_id' => 4,
        ]);

        return $this->requestSuccess(__('lang.payment_successfully'));

    }
}

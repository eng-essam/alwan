<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Traits\OperationsAddress;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    use ReturnJson, OperationsAddress;

    public function addAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city' => ['required', 'string'],
            'region' => ['required', 'string'],
            'fullAddress' => ['required', 'string'],
            'addressType' => ['required', 'string'],
            'default' => ['required', 'in:0,1,true,false'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $address = Address::create([
            'user_id' => $request->user()->id,
            'region' => $request->region,
            'city' => $request->city,
            'fullAddress' => $request->fullAddress,
            'addressType' => $request->addressType,
            'default' => $request->default,
        ]);

        if ($request->default == false) {
            $this->setAddressDefault($request->user()->id, $address->id);
        }

        return $this->requestSuccess(__('lang.add_new_address_successfully'));

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use App\Traits\OperationsAddress;
use App\Traits\ReturnBoolean;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    use ReturnJson, OperationsAddress, ReturnBoolean;

    public function addAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city' => ['required', 'string'],
            'region' => ['required', 'string'],
            'fullAddress' => ['required', 'string'],
            'addressType' => ['required', 'string'],
            'default' => ['required', 'in:true,false'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $default = $this->returnZeroOrOne($request->default);
        $address = Address::create([
            'user_id' => $request->user()->id,
            'region' => $request->region,
            'city' => $request->city,
            'fullAddress' => $request->fullAddress,
            'addressType' => $request->addressType,
            'default' => $default,
        ]);

        if ($default == 1) {
            $this->setAddressDefault($request->user()->id, $address->id);
        }

        return $this->requestSuccess(__('lang.add_new_address_successfully'));

    }

    public function allAddresses(Request $request)
    {
        $data['allAddress'] = AddressResource::collection(Address::where('user_id', $request->user()->id)->get());
        return $this->requestSuccess(null, $data);
    }

    public function setDefaultAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'addressId' => ['required', 'integer', 'exists:addresses,id'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        return $this->setAddressDefault($request->user()->id, $request->addressId);

    }
}

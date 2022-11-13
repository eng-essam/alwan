<?php

namespace App\Traits;

use App\Models\Address;

trait OperationsAddress
{
    use ReturnJson;

    public function setAddressDefault($userId, $addressId)
    {
        Address::findOrFail($addressId)->update(['default' => 1]);
        Address::where('user_id', $userId)->where('id', '!=', $addressId)
            ->update(['default' => 0]);

        return $this->requestSuccess(__('lang.successfully'));
    }
}

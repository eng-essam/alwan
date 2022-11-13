<?php

namespace App\Http\Resources;

use App\Models\Address;
use App\Traits\ReturnBoolean;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Address */
class AddressResource extends JsonResource
{
    use ReturnBoolean;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'region' => $this->region,
            'city' => $this->city,
            'fullAddress' => $this->fullAddress,
            'addressType' => $this->addressType,
            'default' => $this->returnTrueOrfalse($this->default),
        ];
    }
}

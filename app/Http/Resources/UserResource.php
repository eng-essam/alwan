<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\User */
class UserResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phoneKey' => $this->phoneKey,
            'phone' => $this->phone,
            'fullPhone' => $this->fullPhone,
            'address' => $this->address,
            'img' => asset("uploads/$this->img"),
            'email_verified_at' => $this->email_verified_at,
        ];
    }
}

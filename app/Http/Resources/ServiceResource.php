<?php

namespace App\Http\Resources;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Service */
class ServiceResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'subServiceName' => $this->service_name(),
            'subServiceMainImg' => asset("uploads/ads/$this->main_img"),
            'subServiceSubImg' => asset("uploads/ads/$this->sub_img"),
            'subServiceFirstDesc' => $this->service_first_desc(),
            'subServiceSecondDesc' => $this->service_second_desc(),
            'mainServiceName' => $this->service_branch->service_branch_name(),
            'companyName' => $this->company_branch->company_name(),
        ];
    }
}

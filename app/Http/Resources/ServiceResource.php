<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

/** @mixin \App\Models\Service */
class ServiceResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        $lang = App::getLocale();

        return [
            'id' => $this->id,
            'subServiceName' => $this->service_name($lang),
            'subServiceMainImg' => asset("uploads/ads/$this->main_img") ,
            'subServiceSubImg' => asset("uploads/ads/$this->sub_img") ,
            'subServiceFirstDesc' => $this->service_first_desc($lang),
            'subServiceSecondDesc' => $this->service_second_desc($lang),
            'mainServiceName' => $this->service_branch->service_branch_name($lang),
            'companyName' => $this->company_branch->company_name($lang),
        ];
    }
}

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
            'service_name' => $this->service_name($lang),
            'main_img' => asset("uploads/ads/$this->main_img") ,
            'service_desc' => $this->service_desc($lang),
            'sub_img' => asset("uploads/ads/$this->sub_img") ,
            'service_branch_name' => $this->service_branch->service_branch_name($lang),
            'company_branch_name' => $this->company_branch->company_name($lang),

        ];
    }
}

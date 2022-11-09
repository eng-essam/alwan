<?php

namespace App\Http\Resources;

use App\Models\Service_branch;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

/** @mixin Service_branch */
class Service_branchResource extends JsonResource
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
            'mainServiceName' => $this->service_branch_name($lang),
            'mainServiceImg' => asset("uploads/$this->service_branch_img"),
            'numberSubService' => $this->services()->count(),
        ];
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    use ReturnJson;

    public function allSubService()
    {
        return $this->requestSuccess(null, ServiceResource::collection(Service::get()));
    }

    public function all_sub_service_belong_main_service(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mainServiceId' => ['required', 'numeric', 'exists:service_branches,id'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }
        return $this->requestSuccess(null,
            ServiceResource::collection(Service::where('service_branch_id', $request->mainServiceId)->get()
            ));
    }

    public function oneSubService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subServiceId' => ['required', 'numeric', 'exists:services,id'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }
        return $this->requestSuccess(null, new ServiceResource(Service::findOrFail($request->subServiceId)));
    }


}

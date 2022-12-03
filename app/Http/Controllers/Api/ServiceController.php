<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Service_branchResource;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use App\Models\Service_branch;
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

    public function allSubServiceBelongMainService(Request $request)
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

    public function searchSubService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subServiceName' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        return $this->requestSuccess(null,
            ServiceResource::collection(Service::where('service_name->ar', 'like', "%$request->subServiceName%")
                ->orWhere('service_name->en', 'like', "%$request->subServiceName%")->get()));
    }

    public function searchMainService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mainServiceName' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        return $this->requestSuccess(null, Service_branchResource::collection(
            Service_branch::where('service_branch_name->ar', 'like', "%$request->mainServiceName%")
                ->orWhere('service_branch_name->en', 'like', "%$request->mainServiceName%")->get()));
    }

}

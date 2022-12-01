<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuyProductResource;
use App\Http\Resources\OrderStatusResource;
use App\Models\BuyService;
use App\Models\Company_branch;
use App\Models\OrderStatus;
use App\Models\User;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    use ReturnJson;

    public function allOrderProducts(Request $request)
    {
        $lang = App::getLocale();
        $user = User::where('id', $request->user()->id)->with('ProductsCurrent')->first();
        $allOrders = json_decode($user)->products_current;
        $orders = [];

        foreach ($allOrders as $key => $oneOrder) {
            $orders[$key]['product_id'] = $allOrders[$key]->id;
            $orders[$key]['product_name'] = json_decode($allOrders[$key]->product_name)->$lang;
            $orders[$key]['product_img'] = asset('uploads/' . $allOrders[$key]->product_img);
            $orders[$key]['Company_branch'] = json_decode(Company_branch::findOrFail($allOrders[$key]->company_branch_id)
                ->pluck('company_name')->first())->$lang;
            $orders[$key]['Order_id'] = $allOrders[$key]->pivot->order_id;
            $orders[$key]['Order_quantity'] = $allOrders[$key]->pivot->product_quantity;
            $orders[$key]['Order_price'] = $allOrders[$key]->pivot->product_price;
            $orders[$key]['Order_Status'] = new OrderStatusResource(OrderStatus::findOrFail($allOrders[$key]->pivot->order_status_id));
        }
        $data['allProductOrders'] = $orders;
        return $this->requestSuccess(null, $data);
    }

    public function allOrderProductsDone(Request $request)
    {
        $lang = App::getLocale();
        $user = User::where('id', $request->user()->id)->with('ProductsDone')->first();
        $allOrders = json_decode($user)->products_done;
        $orders = [];

        foreach ($allOrders as $key => $oneOrder) {
            $orders[$key]['product_id'] = $allOrders[$key]->id;
            $orders[$key]['product_name'] = json_decode($allOrders[$key]->product_name)->$lang;
            $orders[$key]['product_img'] = asset('uploads/' . $allOrders[$key]->product_img);
            $orders[$key]['Company_branch'] = json_decode(Company_branch::findOrFail($allOrders[$key]->company_branch_id)
                ->pluck('company_name')->first())->$lang;
            $orders[$key]['Order_id'] = $allOrders[$key]->pivot->order_id;
            $orders[$key]['Order_quantity'] = $allOrders[$key]->pivot->product_quantity;
            $orders[$key]['Order_price'] = $allOrders[$key]->pivot->product_price;
            $orders[$key]['Order_Status'] = new OrderStatusResource(OrderStatus::findOrFail($allOrders[$key]->pivot->order_status_id));
        }
        $data['allProductOrders'] = $orders;
        return $this->requestSuccess(null, $data);
    }

    public function serviceRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => ['required', 'exists:subServices,id'],
            'details' => ['required', 'string'],
            'user_file' => ['required', 'file'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $pathFile = Storage::disk('uploads')->put('files', $request->user_file);
        BuyService::create([
            'user_id' => $request->user()->id,
            'service_id' => $request->service_id,
            'details' => $request->details,
            'user_file' => $pathFile,
            'order_id' => rand(10000000, 99999999),
            'order_status_id' => 1,
            'order_status_message' => json_encode([
                'en' => null,
                'ar' => null,
            ]),
        ]);

        return $this->requestSuccess(__('lang.request_under_review'));
    }

    public function allOrderServices(Request $request)
    {
        $lang = App::getLocale();
        $user = User::where('id', $request->user()->id)->with('servicsCurrent')->first();
        $allOrders = json_decode($user)->servics_current;
        $orders = [];

        foreach ($allOrders as $key => $oneOrder) {
            $orders[$key]['service_id'] = $allOrders[$key]->id;
            $orders[$key]['service_name'] = json_decode($allOrders[$key]->service_name)->$lang;
            $orders[$key]['service_img'] = asset('uploads/' . $allOrders[$key]->main_img);
            $orders[$key]['Company_branch'] = json_decode(Company_branch::findOrFail($allOrders[$key]->company_branch_id)
                ->pluck('company_name')->first())->$lang;
            $orders[$key]['Order_id'] = $allOrders[$key]->pivot->order_id;
            $orders[$key]['Order_price'] = $allOrders[$key]->pivot->service_price;
            $orders[$key]['Order_Status'] = new OrderStatusResource(OrderStatus::findOrFail($allOrders[$key]->pivot->order_status_id));
            $orders[$key]['order_status_message'] = json_decode($allOrders[$key]->pivot->order_status_message)->$lang;
        }
        $data['allServiceOrders'] = $orders;
        return $this->requestSuccess(null, $data);
    }

    public function allOrderServicesDone(Request $request)
    {
        $lang = App::getLocale();
        $user = User::where('id', $request->user()->id)->with('servicsDone')->first();
        $allOrders = json_decode($user)->servics_done;
        $orders = [];

        foreach ($allOrders as $key => $oneOrder) {
            $orders[$key]['service_id'] = $allOrders[$key]->id;
            $orders[$key]['service_name'] = json_decode($allOrders[$key]->service_name)->$lang;
            $orders[$key]['service_img'] = asset('uploads/' . $allOrders[$key]->main_img);
            $orders[$key]['Company_branch'] = json_decode(Company_branch::findOrFail($allOrders[$key]->company_branch_id)
                ->pluck('company_name')->first())->$lang;
            $orders[$key]['Order_id'] = $allOrders[$key]->pivot->order_id;
            $orders[$key]['Order_price'] = $allOrders[$key]->pivot->service_price;
            $orders[$key]['Order_Status'] = new OrderStatusResource(OrderStatus::findOrFail($allOrders[$key]->pivot->order_status_id));
            $orders[$key]['order_status_message'] = json_decode($allOrders[$key]->pivot->order_status_message)->$lang;
        }
        $data['allServiceOrders'] = $orders;
        return $this->requestSuccess(null, $data);
    }

    public function resendServiceRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => ['required', 'exists:buy_services,order_id'],
            'details' => ['required', 'string'],
            'user_file' => ['required', 'file'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $pathFile = BuyService::where('order_id', $request->order_id)->select('user_file')->first();
        if ($request->file('user_file')) {
            Storage::disk('uploads')->delete($pathFile);
            $pathFile = Storage::disk('uploads')->put('files', $request->user_file);
        }

        BuyService::where('order_id', $request->order_id)->update([
            'details' => $request->details,
            'user_file' => $pathFile,
            'order_id' => 1,
            'order_status_message' => json_encode([
                'en' => null,
                'ar' => null,
            ]),
        ]);

        return $this->requestSuccess(__('lang.resend_service_request'));
    }

}

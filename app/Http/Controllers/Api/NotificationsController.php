<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NotificationsController extends Controller
{
    use ReturnJson;

    public function allNotification(Request $request)
    {
        $notification = Notification::where('user_id', $request->user()->id)
            ->where('read_notification', 0)->get();
        return $this->requestSuccess(null, NotificationResource::collection($notification));
    }

    public function deleteOneNotification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'notificationId' => ['required', 'exists:notifications,id']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        Notification::findOrFail($request->notificationId)->delete();
        return $this->requestSuccess(__('lang.deleted_notification'));
    }

    public function deleteAllNotification(Request $request)
    {
        Notification::where('user_id', $request->user()->id)->delete();
        return $this->requestSuccess(__('lang.deleted_notification'));
    }

    public function numberOfNotification(Request $request)
    {
        $data['numberOfNotification'] = Notification::where('user_id', $request->user()->id)
            ->where('read_notification', 0)->count();
        return $this->requestSuccess(null, $data);
    }


}

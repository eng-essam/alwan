<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    use ReturnJson;

    public function allNotification(Request $request)
    {
        $notification = Notification::where('user_id', $request->user()->id)
            ->where('read_notification', 0)->get();
        return $this->requestSuccess(null, NotificationResource::collection($notification));
    }


}

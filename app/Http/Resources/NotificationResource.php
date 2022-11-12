<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

/** @mixin \App\Models\Notification */
class NotificationResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'notification_text' => $this->notification_text(),
            'notification_img' => asset("uploads/$this->notification_img") ,
            'created_at' => $this->created_at,
        ];
    }
}

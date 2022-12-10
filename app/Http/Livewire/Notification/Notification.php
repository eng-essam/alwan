<?php

namespace App\Http\Livewire\Notification;

use App\Models\AdminNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{
    public function render()
    {
        $data['notifications'] = AdminNotification::where('user_id', Auth::id())
            ->where('is_read', 0)->latest('id')->get();
        return view('livewire.notification.notification')->with($data);
    }

    public function readNotification($notificationId)
    {
        AdminNotification::findOrFail($notificationId)->update(['is_read' => 1]);
    }

    public function readAllNotification()
    {
        $allNotification = AdminNotification::where('user_id', Auth::id())->get();
        foreach ($allNotification as $notification) {
            $notification->update(['is_read' => 1]);
        }
    }
}

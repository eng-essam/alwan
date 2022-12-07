<?php

namespace App\Traits;

use App\Models\Notification;

trait SendNotification
{
    public function sendUserNotification($userId, $statusId, $orderId)
    {
        if ($statusId == 1) {
            $notification_text = json_encode([
                'ar' => ' في انتظار الموافقة علي طلبك' . " ($orderId)",
                'en' => "Awaiting approval of your order ($orderId)",
            ]);
        } elseif ($statusId == 2) {
            $notification_text = json_encode([
                'ar' => ' تم رفض طلبك' . " ($orderId)",
                'en' => "Your order was rejected ($orderId)",
            ]);
        } elseif ($statusId == 3) {
            $notification_text = json_encode([
                'ar' => ' تم الموافقة علي طلبك ومعلق لحين الدفع' . " ($orderId)",
                'en' => "Your order has been approved and pending payment ($orderId)",
            ]);
        } elseif ($statusId == 4) {
            $notification_text = json_encode([
                'ar' => 'تم استلام طلبك بنجاح ' . " ($orderId)",
                'en' => "Your order has been successfully received ($orderId)",
            ]);
        } elseif ($statusId == 5) {
            $notification_text = json_encode([
                'ar' => 'طلبك في مرحلة الفرز ' . " ($orderId)",
                'en' => "Your order is in the stage of sorted ($orderId)",
            ]);
        } elseif ($statusId == 6) {
            $notification_text = json_encode([
                'ar' => 'طلبك في مرحلة التنفيذ ' . " ($orderId)",
                'en' => "Your order is in the Stage of execution ($orderId)",
            ]);
        } elseif ($statusId == 7) {
            $notification_text = json_encode([
                'ar' => 'طلبك في مرحلة التخزين ' . " ($orderId)",
                'en' => "Your order is in the Storage stage ($orderId)",
            ]);
        } elseif ($statusId == 8) {
            $notification_text = json_encode([
                'ar' => 'تم تسليم طلبك ' . " ($orderId)",
                'en' => "Order delivered ($orderId)",
            ]);
        }

        Notification::create([
            'user_id' => $userId,
            'notification_text' => $notification_text,
            'notification_img' => null,
        ]);
    }
}
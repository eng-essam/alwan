<?php

namespace App\Traits;

use App\Models\AdminNotification;
use App\Models\AdminNotificationPivot;
use App\Models\Notification;
use App\Models\Permission;

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

    public function sendAdminNotification($permissionId, $orderId, $orderType = 'product')
    {
        if ($permissionId == 1) {
            $desc = json_encode([
                'ar' => 'طلب خدمة جديد رقم الطلب هو ' . " ($orderId)",
                'en' => "New service order The order number is ($orderId)",
            ]);
            $url = 'admin/all-service-orders';
        } elseif ($permissionId == 3) {
            $desc = json_encode([
                'ar' => 'طلب فرز خدمة جديد رقم الطلب هو ' . " ($orderId)",
                'en' => "New service sorting order The order number is ($orderId)",
            ]);
            if ($orderType == 'service') {
                $url = 'admin/all-sorting-service-orders';
            }
            $url = 'admin/all-sorting-product-orders';
        } elseif ($permissionId == 4) {
            $desc = json_encode([
                'ar' => 'طلب تنفيذ خدمة جديد رقم الطلب هو ' . " ($orderId)",
                'en' => "New service execution order The order number is ($orderId)",
            ]);
            if ($orderType == 'service') {
                $url = 'admin/all-execute-service-orders';
            }
            $url = 'admin/all-execute-product-orders';
        } elseif ($permissionId == 5) {
            $desc = json_encode([
                'ar' => 'طلب جديد في مرحلة التخزين رقم الطلب هو ' . " ($orderId)",
                'en' => "New order in stocking stage The order number is ($orderId)",
            ]);
            if ($orderType == 'service') {
                $url = 'admin/all-storage-service-orders';
            }
            $url = 'admin/all-delivered-product-orders';
        }

        $permissions = Permission::with('admins')->find($permissionId);
        foreach ($permissions->admins as $permission) {
            AdminNotification::create([
                'user_id' => $permission->id,
                'desc' => $desc,
                'url' => $url,
            ]);
        }
    }

}
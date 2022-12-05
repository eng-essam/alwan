<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    public function run()
    {
        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Waiting for approval',
                'ar' => 'في انتظار الموافقة'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Order has been rejected',
                'ar' => 'تم الرفض'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Pending until payment',
                'ar' => 'معلق لحين الدفع'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Order received',
                'ar' => 'تم استلام الطلب'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Stage of sorted',
                'ar' => ' مرحلة الفرز'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Stage of execution',
                'ar' => ' مرحلة التنفيذ'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Storage stage',
                'ar' => ' مرحلة التخزين'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Order delivered',
                'ar' => 'تم تسليم الطلب'
            ]),
        ]);


    }
}

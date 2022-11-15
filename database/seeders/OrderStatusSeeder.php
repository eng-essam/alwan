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
                'en' => 'pending until payment',
                'ar' => 'معلق لحين الدفع'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'The receipt of the request',
                'ar' => 'تم استلام الطلب'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'In the stage of sorted',
                'ar' => 'في مرحلة الفرز'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'In the stage of execution',
                'ar' => 'في مرحلة التنفيذ'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'reques has been rejected',
                'ar' => 'في مرحلة التخزين'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'Order delivered',
                'ar' => 'تم تسليم الطلب'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'reques has been rejected',
                'ar' => 'تم الرفض'
            ]),
        ]);
    }
}

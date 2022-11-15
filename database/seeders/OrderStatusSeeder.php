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
                'en' => 'Your request has been received',
                'ar' => 'تم استلام طلبك'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'The request is being reviewed',
                'ar' => 'يتم مراجعة الطلب'
            ]),
        ]);

        OrderStatus::create([
            'status' => json_encode([
                'en' => 'reques has been rejected',
                'ar' => 'تم رفض الطلب'
            ]),
        ]);


    }
}

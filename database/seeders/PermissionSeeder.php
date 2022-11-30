<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create([
            'name' => json_encode([
                'en' => 'Responsible for reviewing orders',
                'ar' => 'المسئول عن مراجعة الطلبات',
            ]),
            'desc' => json_encode([
                'en' => 'Responsible for reviewing orders before approval',
                'ar' => 'المسؤول عن مراجعة الطلبات قبل الموافقة عليها'
            ])
        ]);

        Permission::create([
            'name' => json_encode([
                'en' => 'Responsible for receiving money',
                'ar' => 'المسؤول عن استلام الاموال',
            ]),
            'desc' => json_encode([
                'en' => 'Responsible for receiving money for orders in the branch and transferring orders to the sorting stage',
                'ar' => 'المسؤول عن استلام اموال الطلبات في الفرع وتحويل الطلبات اللي مرحلة الفرز '
            ])
        ]);

        Permission::create([
            'name' => json_encode([
                'en' => 'Responsible for the sorting process',
                'ar' => 'المسؤول عن عملية الفرز',
            ]),
            'desc' => json_encode([
                'en' => 'Responsible for the process of sorting orders and transferring the orders to the implementation stage',
                'ar' => 'المسؤول عن عملية فرز الطلبات وتحويل الطلب الي مرحلة التنفيذ '
            ])
        ]);

        Permission::create([
            'name' => json_encode([
                'en' => 'Responsible for the implementation process',
                'ar' => 'المسؤول عن عملية التنفيذ',
            ]),
            'desc' => json_encode([
                'en' => 'Responsible for the implementation process of orders and then transferring them to the storage stage',
                'ar' => 'المسؤول عن عملية تنفيذ الطلبات ثم تحويلها لمرحلة التخزين'
            ])
        ]);

        Permission::create([
            'name' => json_encode([
                'en' => 'Responsible for ensuring that products are in stock',
                'ar' => 'المسؤول عن التأكد ان المنتجات في المخزن ',
            ]),
            'desc' => json_encode([
                'en' => 'Responsible for ensuring that products are in stock and then transferred to the delivery stage',
                'ar' => 'المسؤول عن التأكد ان المنتجات في المخزن ثم تحويله لمرحلة التسليم'
            ])
        ]);

        Permission::create([
            'name' => json_encode([
                'en' => 'Responsible for ensuring that orders are delivered',
                'ar' => 'المسؤول عن التأكد تسليم الطلبات',
            ]),
            'desc' => json_encode([
                'en' => 'Responsible for ensuring that orders are successfully delivered to users',
                'ar' => 'المسؤول عن التأكد ان الطلبات تم تسليمها للمستخدمين بنجاح',
            ])
        ]);
    }
}

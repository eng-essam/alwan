<?php

namespace Database\Seeders;

use App\Models\Company_branch;
use Illuminate\Database\Seeder;

class Company_branchSeeder extends Seeder
{
    public function run()
    {
        Company_branch::create([
            'company_name' => json_encode([
                'en' => 'Printing Branch',
                'ar' => 'فرع الطباعة',
            ]),
            'company_address' => json_encode([
                'en' => 'Printing Branch',
                'ar' => 'مصر'
            ])
        ]);
        Company_branch::create([
            'company_name' => json_encode([
                'en' => 'Tourism Branch',
                'ar' => 'فرع السياحة',
            ]) ,
            'company_address' => json_encode([
                'en' => 'audi Arabia',
                'ar' => 'السعودية',
            ]) ,
        ]);
        Company_branch::create([
            'company_name' => json_encode([
                'en' => 'Sports Branch',
                'ar' => 'فرع الرياضة',
            ]),
            'company_address' => json_encode([
                'en' => 'Emirates',
                'ar' => 'الامارات',
            ]),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Company_branch;
use Illuminate\Database\Seeder;

class Company_branchSeeder extends Seeder
{
    public function run()
    {
        Company_branch::create([
            'company_name' => 'Printing Branch',
            'company_address' => 'Egypt',
        ]);
        Company_branch::create([
            'company_name' => 'Tourism Branch',
            'company_address' => 'Saudi Arabia',
        ]);
        Company_branch::create([
            'company_name' => 'Sports Branch',
            'company_address' => 'Emirates',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product_branch;
use Illuminate\Database\Seeder;

class Product_branchSeeder extends Seeder
{
    public function run()
    {
        Product_branch::factory(5)->create();

    }
}

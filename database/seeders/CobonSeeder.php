<?php

namespace Database\Seeders;

use App\Models\Cobon;
use Illuminate\Database\Seeder;

class CobonSeeder extends Seeder
{
    public function run()
    {
        Cobon::factory(5)->create();
    }
}

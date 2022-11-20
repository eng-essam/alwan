<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
             'name' => 'superAdmin',
        ]);

        Role::create([
            'name' => 'dash',
        ]);

        Role::create([
            'name' => 'user',
        ]);
    }
}

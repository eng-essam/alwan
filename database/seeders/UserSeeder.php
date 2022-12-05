<?php

namespace Database\Seeders;

use App\Models\User;
use App\Traits\CreateImg;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    use CreateImg;

    public function run()
    {
        User::create([
            'name' => 'superAdmin',
            'email' => 'super@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 121212121,
            'phoneKey' => '+966121212121',
            'role_id' => 1,
            'fullPhone' => '+966',
            'email_verified_at' => Carbon::now(),
            'img' => $this->createImg('superAdmin'),

        ])->permissions()->attach([1,2,3,4,5,6]);
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 232323232,
            'phoneKey' => '+966',
            'fullPhone' => '+966232323232',
            'role_id' => 2,
            'company_branch_id' => 1,
            'email_verified_at' => Carbon::now(),
            'img' => $this->createImg('Admin'),

        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 232312132,
            'fullPhone' => '+966232312132',
            'phoneKey' => '+966',
            'role_id' => 3,
            'email_verified_at' => Carbon::now(),
            'img' => $this->createImg('user'),
        ]);
    }
}


<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'superAdmin',
            'email' => 'superAdmin@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 12345678,
            'phoneKey' => '+20',
            'address' => 'القاهرة',
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 12345677,
            'phoneKey' => '+70',
            'address' => 'دمياط',
            'role_id' => 2,
            'company_branch_id' => 1,
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 123456788,
            'phoneKey' => '+20',
            'address' => 'القاهرة',
            'role_id' => 3,
        ]);
    }
}


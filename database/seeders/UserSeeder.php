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
            'email' => 'superAdmin@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 12345678,
            'phoneKey' => '+20',
            'role_id' => 1,
            'email_verified_at' => Carbon::now(),
            'img' => $this->createImg('superAdmin'),

        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 12345677,
            'phoneKey' => '+70',
            'role_id' => 2,
            'company_branch_id' => 1,
            'email_verified_at' => Carbon::now(),
            'img' => $this->createImg('Admin'),

        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make(12345678),
            'phone' => 123456788,
            'phoneKey' => '+20',
            'role_id' => 3,
            'email_verified_at' => Carbon::now(),
            'img' => $this->createImg('user'),
        ]);
    }
}


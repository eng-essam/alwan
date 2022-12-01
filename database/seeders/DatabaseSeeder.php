<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ad;
use App\Models\Company_branch;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Product_branch;
use App\Models\Service;
use App\Models\Service_branch;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        Product_branch::factory(10)->create();
        Service_branch::factory(10)->create();
        Service::factory(10)->create();
        Product::factory(10)->create();
        //Notification::factory(5)->create();
        //Ad::factory(5)->create();
    }
}

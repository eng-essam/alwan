<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\BuyProduct;
use App\Models\Company_branch;
use App\Models\OrderStatus;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class BuyProductSeeder extends Seeder
{
    public function run()
    {
        BuyProduct::create([
            'user_id' => User::inRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'order_id' => rand(10000000,99999999),
            'product_quantity' => 330,
            'product_price' => 70,
            'address_id' => Address::inRandomOrder()->first()->id,
            'order_status_id' => OrderStatus::inRandomOrder()->first()->id,
        ]);

        BuyProduct::create([
            'user_id' => User::inRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'order_id' => rand(10000000,99999999),
            'product_quantity' => 200,
            'product_price' => 50,
            'address_id' => Address::inRandomOrder()->first()->id,
            'order_status_id' => OrderStatus::inRandomOrder()->first()->id,
        ]);

        BuyProduct::create([
            'user_id' => User::inRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'order_id' => rand(10000000,99999999),
            'product_quantity' => 100,
            'product_price' => 25,
            'address_id' => Address::inRandomOrder()->first()->id,
            'order_status_id' => OrderStatus::inRandomOrder()->first()->id,
        ]);
    }
}

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
            'product_quantity' => 330,
            'product_price' => 70,
            'pay_method' => 'home',
            'address_id' => Address::inRandomOrder()->first()->id,
            'company_branch_id' => null,
            'order_status_id' => OrderStatus::inRandomOrder()->first()->id,
        ]);

        BuyProduct::create([
            'user_id' => User::inRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'product_quantity' => 200,
            'product_price' => 50,
            'pay_method' => 'card',
            'address_id' => Address::inRandomOrder()->first()->id,
            'company_branch_id' => null,
            'order_status_id' => OrderStatus::inRandomOrder()->first()->id,
        ]);

        BuyProduct::create([
            'user_id' => User::inRandomOrder()->first()->id,
            'product_id' => Product::inRandomOrder()->first()->id,
            'product_quantity' => 100,
            'product_price' => 25,
            'pay_method' => 'branch',
            'address_id' => null,
            'company_branch_id' => Company_branch::inRandomOrder()->first()->id,
            'order_status_id' => OrderStatus::inRandomOrder()->first()->id,
        ]);
    }
}

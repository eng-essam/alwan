<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Product_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'company_branch_id' => $this->faker->randomNumber(),
            'product_name' => $this->faker->name(),
            'product_img' => $this->faker->word(),
            'Product_price' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'product_branch_id' => Product_branch::factory(),
        ];
    }
}

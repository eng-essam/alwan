<?php

namespace Database\Factories;

use App\Models\Product_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Product_branchFactory extends Factory
{
    protected $model = Product_branch::class;

    public function definition(): array
    {
        return [
            'product_branch_name' => json_encode([
                'en' => $this->faker->word,
                'ar' => $this->faker->word
            ]),
            'product_branch_img' => 'product_branchs/' . 1 . '.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Company_branch;
use App\Models\Product;
use App\Models\Product_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;


class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $ImgID = Str::random(30);
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/subProducts/' . $ImgID . '.png'));

        return [
            'company_branch_id' => Company_branch::inRandomOrder()->first()->id,
            'product_branch_id' => Product_branch::inRandomOrder()->first()->id,
            'product_name' => json_encode([
                'en' => $this->faker->name(),
                'ar' => $this->faker->name()
            ]),
            'product_desc' => json_encode([
                'en' => $this->faker->text(),
                'ar' => $this->faker->text()
            ]),
            'product_quantity_price' => collect([
                ['quantity' => rand(1000, 9000), 'price' => rand(1000, 9000)],
                ['quantity' => rand(1000, 9000), 'price' => rand(1000, 9000)],
                ['quantity' => rand(1000, 9000), 'price' => rand(1000, 9000)],
            ]),
            'product_img' => 'subProducts/' . $ImgID . '.png',
            'is_offer' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}


<?php

namespace Database\Factories;

use App\Models\Product_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;

class Product_branchFactory extends Factory
{
    protected $model = Product_branch::class;

    public function definition(): array
    {

        $ImgID = Str::random(30);
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/mainProducts/' . $ImgID . '.png'));

        return [
            'product_branch_name' => json_encode([
                'en' => $this->faker->word,
                'ar' => $this->faker->word
            ]),
            'product_branch_desc' => json_encode([
                'en' => $this->faker->word,
                'ar' => $this->faker->word
            ]),
            'product_branch_img' => 'mainProducts/' . $ImgID . '.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

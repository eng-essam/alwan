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
        $ImgID =Str::random(30)  ;
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/products/' . $ImgID . '.png'));

        return [
            'company_branch_id' => Company_branch::inRandomOrder()->first()->id,
            'product_branch_id' => Product_branch::inRandomOrder()->first()->id,
            'product_name' => json_encode([
                'en' => $this->faker->name(),
                'ar' => $this->faker->name()
            ]) ,
            'product_img' => 'products/' . $ImgID . '.png',
            'product_desc' => json_encode([
                'en' => $this->faker->text(),
                'ar' => $this->faker->text()
            ]) ,
            'Product_price' => $this->faker->randomFloat(),
            'Product_quantities' => '100 , 200 , 300',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Service_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;

class Service_branchFactory extends Factory
{
    protected $model = Service_branch::class;

    public function definition(): array
    {
        $ImgID =Str::random(30);
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/mainServices/' . $ImgID . '.png'));
        return [
            'service_branch_name' => json_encode([
                'en' => $this->faker->word,
                'ar' => $this->faker->word
            ]),
            'service_branch_desc'=>json_encode([
                'en' => $this->faker->text,
                'ar' => $this->faker->text
            ]),
            'service_branch_img' => 'mainServices/' . $ImgID . '.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

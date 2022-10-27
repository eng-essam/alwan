<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;

class AdFactory extends Factory
{
    protected $model = Ad::class;

    public function definition(): array
    {
        $ImgID =Str::random(30);
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/ads/' . $ImgID . '.png'));
        return [
            'ad_img' => 'ads/' . $ImgID . '.png',
            'ad_url' => $this->faker->url,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

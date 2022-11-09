<?php

namespace Database\Factories;

use App\Models\Company_branch;
use App\Models\Service;
use App\Models\Service_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $ImgID1 =Str::random(30);
        $ImgID2 =Str::random(30);
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/services/' . $ImgID1 . '.png'));
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/services/' . $ImgID2 . '.png'));

        return [
            'company_branch_id' => Company_branch::inRandomOrder()->first()->id,
            'service_branch_id' => Service_branch::inRandomOrder()->first()->id,
            'service_name' => json_encode([
                'en' => $this->faker->word,
                'ar' => $this->faker->word
            ]),
            'main_img' => 'services/' . $ImgID1 . '.png',
            'service_first_desc' => json_encode([
                'en' => $this->faker->text,
                'ar' => $this->faker->text
            ]),
            'service_second_desc' => json_encode([
                'en' => $this->faker->text,
                'ar' => $this->faker->text
            ]),
            'sub_img' => 'services/' . $ImgID2 . '.png',
            'is_offer' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Company_branch;
use App\Models\Service;
use App\Models\Service_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'company_branch_id' => Company_branch::inRandomOrder()->first()->id,
            'service_branch_id' => Service_branch::inRandomOrder()->first()->id,
            'service_name' => json_encode([
                'en' => $this->faker->word,
                'ar' => $this->faker->word
            ]),
            'first_img' => 'services/' . 1 .'.png',
            'first_desc' => json_encode([
                'en' => $this->faker->text,
                'ar' => $this->faker->text
            ]),
            'second_img' => 'services/' . 2 .'.png',
            'second_desc' => json_encode([
                'en' => $this->faker->text,
                'ar' => $this->faker->text
            ]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

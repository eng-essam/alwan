<?php

namespace Database\Factories;

use App\Models\Service_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Service_branchFactory extends Factory
{
    protected $model = Service_branch::class;

    public function definition(): array
    {
        return [
            'service_branch_name' => json_encode([
                'en' => $this->faker->word,
                'ar' => $this->faker->word
            ]),
            'service_branch_img' => 'service_branchs/' . 1 . '.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

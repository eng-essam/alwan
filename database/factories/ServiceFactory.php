<?php

namespace Database\Factories;

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
            'company_branch_id' => $this->faker->randomNumber(),
            'service_name' => $this->faker->name(),
            'first_img' => $this->faker->word(),
            'first_desc' => $this->faker->word(),
            'second_img' => $this->faker->word(),
            'second_desc' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'service_branch_id' => Service_branch::factory(),
        ];
    }
}

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
            'service_branch_img' => $this->faker->word(),
            'service_branch_name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

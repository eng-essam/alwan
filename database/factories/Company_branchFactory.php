<?php

namespace Database\Factories;

use App\Models\Company_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Company_branchFactory extends Factory
{
    protected $model = Company_branch::class;

    public function definition(): array
    {
        return [
            'company_name' => $this->faker->name(),
            'company_address' => $this->faker->address(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

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
            'company_name' => json_encode([
                'en' => $this->faker->name(),
                'ar' =>$this->faker->name()
            ]),
            'company_address' =>json_encode([
                'en' => $this->faker->address(),
                'ar' => $this->faker->address(),
            ]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

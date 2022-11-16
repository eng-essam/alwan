<?php

namespace Database\Factories;

use Cobon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CobonFactory extends Factory
{
    protected $model = \App\Models\Cobon::class;

    public function definition(): array
    {
        return [
            'cobon' => Str::random(6),
            'percentage' => rand(10,99)
        ];
    }
}

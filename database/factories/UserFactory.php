<?php

namespace Database\Factories;

use App\Models\Company_branch;
use App\Traits\CreateImg;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory
 */
class UserFactory extends Factory
{
    use CreateImg;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'img' => $this->createImg($this->faker->name()),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make(12345678),
            'phone' => $this->faker->phoneNumber(),
            'phoneKey' => '+20',
            'fullPhone' => $this->faker->phoneNumber(),
            'role_id' => 3,
            'company_branch_id' => Company_branch::inRandomOrder()->first()->id,
            'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

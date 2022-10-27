<?php

namespace Database\Factories;

use App\Models\Company_branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ImgID =Str::random(30);
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/user_imgs/' . $ImgID . '.png'));

        return [
            'name' => $this->faker->name(),
            'img' => "user_imgs/$ImgID.png",
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make(12345678),
            'phone' => $this->faker->phoneNumber(),
            'phoneKey' => '+20',
            'address' => $this->faker->address(),
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
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

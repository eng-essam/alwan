<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        return [
            'notification_img' => 'notifications/' . 1 . '.png',
            'notification_text' => json_encode([
                'en' => $this->faker->text,
                'ar' => $this->faker->text
            ]),
            'user_id' => User::inRandomOrder()->first()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

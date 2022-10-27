<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;
class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        $ImgID =Str::random(30);
        Avatar::create($this->faker->name())->setShape('square')->save(public_path('uploads/notifications/' . $ImgID . '.png'));
        return [
            'notification_img' => 'notifications/' . $ImgID . '.png',
            'notification_text' => json_encode([
                'en' => $this->faker->text,
                'ar' => $this->faker->text
            ]),
            'read_notification' => 0,
            'user_id' => User::inRandomOrder()->first()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

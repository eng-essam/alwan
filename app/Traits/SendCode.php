<?php

namespace App\Traits;

use App\Mail\UserEmailVerified;
use App\Models\Email_code;
use Illuminate\Support\Facades\Mail;

trait SendCode
{
    public function sendCode($email)
    {
        $code = rand(100000, 999999);
        Mail::to($email)->send(new UserEmailVerified($code));
        Email_code::where('email', $email)->delete();
        Email_code::create([
            'email' => strtolower($email),
            'code' => $code,
        ]);
    }
}

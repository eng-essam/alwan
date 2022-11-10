<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

trait DeletUserWithEmailNotVerified
{
    public function deletUserWithEmailNotVerified($email){
        $userExist = User::where('email', $email)->first();
        if ($userExist) {
            if ($userExist->email_verified_at == null) {
                if ($userExist->img != null){
                    Storage::disk('uploads')->delete($userExist->img);
                }
                $userExist->delete();
            }
        }
    }
}

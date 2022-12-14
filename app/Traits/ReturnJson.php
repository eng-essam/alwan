<?php

namespace App\Traits;

use App\Http\Resources\UserResource;
use App\Models\User;

trait ReturnJson
{

    public function requestFails($errors)
    {
        $arrErrors = $errors;
        if (!is_array($errors)) {
            $arrErrors = [$errors];
        }
        return response()->json(['success' => false, 'status' => null, 'errors' => $arrErrors, 'data' => null], 422);
    }

    public function requestUserLogin($message, $email)
    {
        $user = User::where('email', $email)->first();
        $token = $user->createToken($user->name);
        $data = [
            'token' => $token->plainTextToken,
            'user' => new UserResource($user)
        ];

        return $this->requestSuccess($message, $data);
    }

    public function requestSuccess($message = null, $data = null)
    {
        return response()->json(['success' => true, 'status' => $message, 'errors' => [], 'data' => $data], 200);
    }

    public function requestUserInformation($userId)
    {
        $data = [
            'user' => new UserResource(User::findOrFail($userId))
        ];
        return $this->requestSuccess($message = null, $data);
    }

}



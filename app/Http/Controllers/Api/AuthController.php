<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\ReturnJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    use ReturnJson;

    public function userInfo(Request $request)
    {
        return $user = User::findOrFail($request->user()->id);
        $data = [
            'user' => new UserResource($user)
        ];
        return $this->requestSuccess($message = null, $data);
    }

    public function deleteAccount(Request $request)
    {
        $user = User::findOrFail($request->user()->id);
        if ($user->img != null) {
            Storage::disk('uploads')->delete($user->img);
        }
        $user->delete();

        return $this->requestSuccess(__('lang.delete_account'));
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return $this->requestSuccess(__('lang.logout_successfully'));
    }

}

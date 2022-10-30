<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Email_code;
use App\Models\User;
use App\Traits\CreateImg;
use App\Traits\DeletUserWithEmailNotVerified;
use App\Traits\ReturnJson;
use App\Traits\SendCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ReturnJson, SendCode, CreateImg, DeletUserWithEmailNotVerified;

    public function register(Request $request)
    {
        $this->deletUserWithEmailNotVerified($request->email);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['same:password', 'min:8'],
            'phone' => ['required', 'unique:users,phone'],
            'phoneKey' => ['required'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $this->sendCode($request->email);
        $userImg = $this->createImg($request->name);

        User::create([
            'name' => trim($request->name),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'phone' => trim($request->phone),
            'phoneKey' => trim($request->phoneKey),
            'fullPhone' => trim($request->phoneKey) . trim($request->phone),
            'img' => 'user_imgs/' . $userImg . '.png',
            'role_id' => 3,
        ]);

        return $this->requestSuccess(__('lang.send_code_email_activation_successfully'));
    }

    public function verifyEmailCodeCorrect(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:email_codes,email'],
            'code' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $UserExist = Email_code::where('email', $request->email)->where('code', $request->code)->first();
        if (!$UserExist) {
            return $this->requestFails(__('lang.code_incorrect'));
        }

        Email_code::where('email', $request->email)->delete();
        User::where('email', $request->email)->update([
            'email_verified_at' => Carbon::now(),
        ]);

        return $this->requestSuccess(__('lang.mail_confirmed_successfully'));

    }

    public function sendCodeResetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $this->sendCode($request->email);

        return $this->requestSuccess(__('lang.send_code_forgot_password_successfully'));
    }

    public function verifyPasswordCodeCorrect(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:email_codes,email'],
            'code' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $UserExist = Email_code::where('email', $request->email)->where('code', $request->code)->first();
        if (!$UserExist) {
            return $this->requestFails(__('lang.code_incorrect'));
        }

        Email_code::where('email', $request->email)->delete();
        return $this->requestSuccess(__('lang.code_correct'));
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['same:password'],

        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        User::where('email',$request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        $this->requestSuccess(__('lang.password_changed_successfully'));
    }


}

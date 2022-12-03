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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
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
            'phone' => ['required', 'unique:users,phone', 'unique:users,fullPhone'],
            'phoneKey' => ['required'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $this->sendCode($request->email);

        User::create([
            'name' => trim($request->name),
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'phone' => trim($request->phone),
            'phoneKey' => trim($request->phoneKey),
            'fullPhone' => trim($request->phoneKey) . trim($request->phone),
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
            'img' => $this->createImg($request->name),
        ]);

        return $this->requestUserLogin(__('lang.mail_confirmed_successfully'), $request->email);

        //return $this->requestSuccess(__('lang.mail_confirmed_successfully'));

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

    public function verifyPasswordCodeCorrect(Request $request)
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
        return $this->requestSuccess(__('lang.code_correct'));
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
            'newPassword' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:newPassword'],

        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        User::where('email', $request->email)->update([
            'password' => Hash::make($request->newPassword)
        ]);

        return $this->requestSuccess(__('lang.password_changed_successfully'));
    }

    public function resendCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $this->sendCode($request->email);

        return $this->requestSuccess(__('lang.resend_code'));
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return $this->requestUserLogin(__('lang.loging_successfully'), $request->email);
        } else {
            return $this->requestFails(__('lang.password_incorrect'));
        }

    }

    public function registerSocial(Request $request)
    {
        $this->deletUserWithEmailNotVerified($request->email);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        User::create([
            'name' => trim($request->name),
            'email' => strtolower($request->email),
            'img' => $this->createImg($request->name),
            'email_verified_at' => Carbon::now(),
            'role_id' => 3,
        ]);

        return $this->requestUserLogin(__('lang.Account_successfully_created'), $request->email);

    }

    public function loginSocial(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        return $this->requestUserLogin(__('lang.loging_successfully'), $request->email);

    }

}

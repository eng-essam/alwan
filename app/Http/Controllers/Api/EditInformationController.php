<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Email_code;
use App\Models\User;
use App\Traits\ReturnJson;
use App\Traits\SendCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EditInformationController extends Controller
{
    use ReturnJson, SendCode;

    public function editName(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        User::findOrFail($request->user()->id)->update([
            'name' => $request->name,
        ]);

        return $this->requestSuccess(__('lang.name_edit_successfully'));
    }

    public function editEmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', "unique:users,email," . $request->user()->id]
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        if (trim($request->email) != $request->user()->email) {
            $this->sendCode($request->email);
            return $this->requestSuccess(__('lang.send_code_email_activation_successfully'));
        }

        return $this->requestFails(__('lang.no_change'));
    }

    public function changeEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:email_codes,email'],
            'code' => ['required', 'numeric']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $UserExist = Email_code::where('email', $request->email)->where('code', $request->code)->first();
        if (!$UserExist) {
            return $this->requestFails(__('lang.code_incorrect'));
        }

        Email_code::where('email', $request->email)->delete();

        User::findOrFail(Auth::user()->id)->update([
            'email' => $request->email,
            'email_verified_at' => Carbon::now(),
        ]);

        return $this->requestSuccess(__('lang.email_edit_successfully'));
    }

    public function editPhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'numeric'],
            'phoneKey' => ['required']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $fullPhone = $request->phoneKey . $request->phone;
        $checkPhone = User::where('fullPhone', $fullPhone)->first();

        if ($checkPhone) {
            return $this->requestFails(__('lang.Phone_already_exists'));
        }

        $request->user()->update([
            'phone' => $request->phone,
            'phoneKey' => $request->phoneKey,
            'fullPhone' => $fullPhone,
        ]);

        return $this->requestSuccess(__('lang.Phone_edit_successfully'));

    }

    public function editPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldPassword' => ['required'],
            'newPassword' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:newPassword'],
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        if (!Hash::check($request->oldPassword, $request->user()->password)) {
            return $this->requestFails(__('lang.password_incorrect'));
        }

        $request->user()->update([
            'password' => Hash::make($request->newPassword),
        ]);

        return $this->requestSuccess(__('lang.password_changed_successfully'));

    }

    public function editImg(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'newImage' => ['required']
        ]);

        if ($validator->fails()) {
            return $this->requestFails($validator->errors()->all());
        }

        $path = $request->user()->img;
        if ($request->file('newImage')) {
            Storage::disk('uploads')->delete($request->user()->img);
            $path = Storage::disk('uploads')->put('user_imgs', $request->newImage);
        }

        User::findOrFail($request->user()->id)->update([
            'img' => $path,
        ]);

        return $this->requestSuccess(__('lang.img_edit_successfully'));
    }

}

<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Profile extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $name, $image, $email, $phone, $password, $newPassword, $passwordConfirmation;

    public function render()
    {
        $data['auth'] = User::findOrFail(Auth::user()->id);
        return view('livewire.profile.profile')->with($data);
    }

    public function cacheClear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

    public function updated($propertyName)
    {
        $auth = User::findOrFail(Auth::user()->id);
        $this->validateOnly($propertyName, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', "unique:users,email," . Auth::id()],
            'phone' => ['required', 'numeric', "unique:users,phone," . Auth::id(), 'digits:9'],
            'password' => ['required', 'string', 'min:8', function ($attribute, $value, $fail) use ($auth) {
                if (!Hash::check($value, $auth->password)) {
                    $fail(__('lang.password_incorrect'));
                }
            }],
            'newPassword' => ['required', 'string', 'min:8'],
            'passwordConfirmation' => ['required', 'same:newPassword'],
        ]);

    }

    public function setName()
    {
        $this->cacheClear();
        $auth = User::findOrFail(Auth::user()->id);
        $this->name = $auth->name;
    }

    public function setEmail()
    {
        $this->cacheClear();
        $auth = User::findOrFail(Auth::user()->id);
        $this->email = $auth->email;
    }

    public function setPhone()
    {
        $this->cacheClear();
        $auth = User::findOrFail(Auth::user()->id);
        $this->phone = $auth->phone;
    }

    public function submitEditName()
    {
        $this->validate([
            'name' => ['required', 'string'],
        ]);

        $auth = User::findOrFail(Auth::user()->id);
        $auth->update([
            'name' => $this->name,
        ]);
        $this->dispatchBrowserEvent('closeProfile');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }

    public function submitEditEmail()
    {
        $this->validate([
            'email' => ['required', 'email', "unique:users,email," . Auth::id()],
        ]);

        $auth = User::findOrFail(Auth::user()->id);
        $auth->update([
            'email' => $this->email,
        ]);
        $this->dispatchBrowserEvent('closeProfile');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }

    public function submitEditPhone()
    {
        $this->validate([
            'phone' => ['required', 'numeric', "unique:users,phone," . Auth::id(), 'digits:9'],
        ]);

        $auth = User::findOrFail(Auth::user()->id);
        $auth->update([
            'phone' => $this->phone,
            'fullPhone' => '+966' . $this->phone,
        ]);
        $this->dispatchBrowserEvent('closeProfile');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }

    public function submitEditImage()
    {
        $this->validate([
            'image' => ['required', 'file', 'image'],
        ]);

        $auth = User::findOrFail(Auth::user()->id);

        Storage::disk('uploads')->delete($auth->img);
        $imagePath = Storage::disk('uploads')->put('user_imgs', $this->image);
        $auth->update([
            'img' => $imagePath,
        ]);
        $this->dispatchBrowserEvent('closeProfile');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }

    public function submitEditPassword()
    {
        $auth = User::findOrFail(Auth::user()->id);

        $this->validate([
            'password' => ['required', 'string', 'min:8', function ($attribute, $value, $fail) use ($auth) {
                if (!Hash::check($value, $auth->password)) {
                    $fail(__('lang.password_incorrect'));
                }
            }],
            'newPassword' => ['required', 'string', 'min:8'],
            'passwordConfirmation' => ['required', 'same:newPassword'],
        ]);

        $auth->update([
            'password' => Hash::make($this->newPassword),
        ]);

        $this->dispatchBrowserEvent('closeProfile');
        toastr()->success(__('lang.edit_successfully'));
        $this->cacheClear();
    }
}

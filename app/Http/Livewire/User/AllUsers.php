<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AllUsers extends Component
{
    use WithPagination;

    public $userName;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if ($this->userName == null) {
            $data['users'] = User::where('role_id', '3')->latest('id')->paginate(30);
        } else {
            $data['users'] = User::where('role_id', '3')
                ->where('name', 'like', '%' . $this->userName . '%')->latest('id')->paginate(5);
        }

        return view('livewire.users.all-users')->with($data);
    }
}

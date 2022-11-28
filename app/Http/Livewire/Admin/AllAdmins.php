<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AllAdmins extends Component
{
    use WithPagination;

    public $adminName;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if ($this->adminName == null) {
            $data['admins'] = User::where('role_id', '2')->paginate(30);
        } else {
            $data['admins'] = User::where('role_id', '2')
                ->where('name', 'like', '%' . $this->adminName . '%')->paginate(5);
        }
        return view('livewire.admin.all-admins')->with($data);
    }

    public function deleteAdmin($adminID)
    {
        User::findOrFail($adminID)->delete();
        toastr()->success(__('lang.deleted_successfully'));
    }
}

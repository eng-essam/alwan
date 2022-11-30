<?php

namespace App\Http\Livewire\Admin;

use App\Models\Company_branch;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class AllAdmins extends Component
{
    use WithPagination;

    public $adminName, $branchType;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data['allBranch'] = Company_branch::get();

        if ($this->adminName == null) {
            $data['admins'] = User::where('role_id', '2')->where(function ($q) {
                if ($this->branchType != null) {
                    $q->where('company_branch_id', $this->branchType);
                }
            })->paginate(30);
        } else {
            $data['admins'] = User::where('role_id', '2')
                ->where('name', 'like', '%' . $this->adminName . '%')
                ->where(function ($q) {
                    if ($this->branchType != null) {
                        $q->where('company_branch_id', $this->branchType);
                    }
                })->paginate(5);
        }
        return view('livewire.admin.all-admins')->with($data);
    }

    public function deleteAdmin($adminID)
    {
        $user = User::findOrFail($adminID);
        Storage::disk('uploads')->delete($user->img);
        $user->delete();
        toastr()->success(__('lang.deleted_successfully'));
    }
}

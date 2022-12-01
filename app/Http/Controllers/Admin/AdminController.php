<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company_branch;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    use \App\Traits\Permission;

    public function allAdmin()
    {
        return view('dashboard.admin.admin');
    }

    public function addAdmin()
    {
        $data['allBranch'] = Company_branch::get();
        $data['permissions'] = Permission::get();
        return view('dashboard.admin.addAdmin')->with($data);
    }

    public function saveAddAdmin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'unique:users,phone', 'numeric', 'digits:9'],
            'image' => ['required', 'file'],
            'password' => ['required', 'confirmed', 'min:8'],
            'branch' => ['required', 'numeric', 'exists:company_branches,id'],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['required', 'exists:permissions,id'],
        ]);

        $imgPath = Storage::disk('uploads')->put('user_imgs', $request->image);

        $admin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'img' => $imgPath,
            'role_id' => 2,
            'company_branch_id' => $request->branch,
            'phoneKey' => '+966',
            'phone' => $request->phone,
            'fullPhone' => '+966' . $request->phone,
        ]);

        $this->addPermission($admin->id, $request->permissions);

        toastr()->success(__('lang.add_admin_successfully'));

        return redirect(url('admin/all-admins'));
    }

    public function editAdmin($adminId)
    {
        $adminPermissionId = [];
        $data['admin'] = User::findOrFail($adminId);
        $data['allBranch'] = Company_branch::where('id', '!=', $data['admin']->company_branch_id)->get();
        $data['permissions'] = Permission::get();
        return view('dashboard.admin.editAdmin')->with($data);
    }

    public function saveEditAdmin(Request $request, $adminId)
    {
        $admin = User::findOrFail($adminId);
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', "unique:users,email,$admin->id"],
            'phone' => ['required', 'numeric', "unique:users,phone,$admin->id", 'digits:9'],
            'image' => ['nullable', 'file'],
            'branch' => ['required', 'numeric', 'exists:company_branches,id'],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['required', 'exists:permissions,id'],
        ]);

        $imgPath = $admin->img;
        if ($request->hasFile('image')) {
            Storage::disk('uploads')->delete($imgPath);
            $imgPath = Storage::disk('uploads')->put('user_imgs', $request->image);
        }

        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'img' => $imgPath,
            'company_branch_id' => $request->branch,
            'phone' => $request->phone,
            'fullPhone' => '+966' . $request->phone,
        ]);

        $this->editePermission($admin->id, $request->permissions);

        toastr()->success(__('lang.edit_admin_information_successfully'));

        return redirect(url('admin/all-admins'));
    }
}
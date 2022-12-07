<?php

namespace App\Traits;

use App\Models\User;
use phpDocumentor\Reflection\Types\Boolean;

trait Permission
{
    public function addPermission($userId, $permission)
    {
        $user = User::findOrFail($userId);
        if (is_array($permission)) {
            foreach ($permission as $key => $value) {
                $user->permissions()->attach($value);
            }
        }
    }

    public function editePermission($userId, $permission)
    {
        $user = User::findOrFail($userId);
        $user->permissions()->detach();
        if (is_array($permission)) {
            foreach ($permission as $key => $value) {
                $user->permissions()->attach($value);
            }
        }
    }


}
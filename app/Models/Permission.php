<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Permission extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    public function name()
    {
        $lang = App::getLocale();
        return json_decode($this->name)->$lang;
    }

    public function desc()
    {
        $lang = App::getLocale();
        return json_decode($this->desc)->$lang;
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_permission')->withTimestamps();
    }
}
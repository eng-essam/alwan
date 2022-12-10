<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AdminNotification extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    public function desc($lang = null)
    {
        $lang = $lang ?? App::getLocale();
        return json_decode($this->desc)->$lang;
    }

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

}
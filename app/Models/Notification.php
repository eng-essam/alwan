<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Notification extends Model
{
    use HasFactory;

    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function notification_text($lang = null){
        $lang =$lang ?? App::getLocale();
        return json_decode($this->notification_text)->$lang;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

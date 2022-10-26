<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

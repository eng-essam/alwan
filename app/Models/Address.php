<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

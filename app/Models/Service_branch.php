<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_branch extends Model
{
    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function services(){
        return $this->hasMany(Service::class);
    }
}

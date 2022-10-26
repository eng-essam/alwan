<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function company(){
        return $this->belongsTo(Company_branch::class);
    }

    public function service_branch(){
        return $this->belongsTo(Service_branch::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'service_user')
            ->withTimestamps()->withPivot(['Service_details','Service_file','status']);
    }

}

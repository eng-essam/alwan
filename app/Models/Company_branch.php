<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_branch extends Model
{
    use HasFactory;

    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }
}

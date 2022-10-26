<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_branch extends Model
{
    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}

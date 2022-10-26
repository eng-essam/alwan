<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function company(){
        return $this->belongsTo(Company_branch::class);
    }

    public function product_branch(){
        return $this->belongsTo(Product_branch::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'product_user')
            ->withTimestamps()->withPivot(['status']);
    }
}

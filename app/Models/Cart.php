<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'carts';
}

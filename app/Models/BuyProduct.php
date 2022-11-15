<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyProduct extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'buy_products';

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }
}

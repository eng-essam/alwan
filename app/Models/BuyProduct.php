<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyProduct extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'buy_products';

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}

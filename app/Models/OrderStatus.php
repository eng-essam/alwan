<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class OrderStatus extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'order_statuses';

    public function status()
    {
        $lang = App::getLocale();
        return json_decode($this->status)->$lang;
    }

    public function products()
    {
        return $this->hasMany(BuyProduct::class);
    }
}

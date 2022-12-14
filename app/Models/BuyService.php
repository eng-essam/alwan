<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class BuyService extends Model
{
    public $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'buy_services';

    public function order_status_message()
    {
        $lang = App::getLocale();
        return json_decode($this->order_status_message)->$lang;
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class,'order_status_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

}

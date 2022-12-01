<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Product extends Model
{
    use HasFactory;

    public $guarded = ['id', 'created_at', 'updated_at'];

    public function product_name($lang = null)
    {
        $lang =$lang ?? App::getLocale();
        return json_decode($this->product_name)->$lang;
    }

    public function product_desc($lang = null)
    {
        $lang =$lang ?? App::getLocale();
        return json_decode($this->product_desc)->$lang;
    }

    public function company_branch()
    {
        return $this->belongsTo(Company_branch::class);
    }

    public function product_branch()
    {
        return $this->belongsTo(Product_branch::class);
    }

    public function payUsers()
    {
        return $this->belongsToMany(User::class, 'buy_products')
            ->withPivot(['address_id', 'order_status_id', 'product_quantity', 'product_price', 'order_id','details' , 'user_file'])
            ->withTimestamps();
    }

    public function favoriteUsers()
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }

    public function cartUsers()
    {
        return $this->belongsToMany(User::class, 'carts')
            ->withPivot(['file', 'details'])
            ->withTimestamps();
    }
}

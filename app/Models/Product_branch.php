<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Product_branch extends Model
{
    use HasFactory;

    public $guarded = ['id', 'created_at', 'updated_at'];

    public function product_branch_name()
    {
        $lang = App::getLocale();
        return json_decode($this->product_branch_name)->$lang;
    }

    public function product_branch_desc()
    {
        $lang = App::getLocale();
        return json_decode($this->product_branch_desc)->$lang;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

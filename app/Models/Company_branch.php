<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Company_branch extends Model
{
    use HasFactory;

    public $guarded = ['id', 'created_at', 'updated_at'];

    public function company_name()
    {
        $lang = App::getLocale();
        return json_decode($this->company_name)->$lang;
    }

    public function company_address()
    {
        $lang = App::getLocale();
        return json_decode($this->company_address)->$lang;
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }


}

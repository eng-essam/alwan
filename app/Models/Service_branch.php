<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Service_branch extends Model
{
    use HasFactory;

    public function service_branch_name($lang = null){
        $lang =$lang ?? App::getLocale();
        return json_decode($this->service_branch_name)->$lang;
    }

    public $guarded = ['id' , 'created_at' , 'updated_at'];

    public function services(){
        return $this->hasMany(Service::class);
    }
}

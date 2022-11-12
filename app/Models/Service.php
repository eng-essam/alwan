<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Service extends Model
{
    use HasFactory;

    public $guarded = ['id', 'created_at', 'updated_at'];

    public function service_name()
    {
        $lang = App::getLocale();
        return json_decode($this->service_name)->$lang;
    }

    public function service_first_desc()
    {
        $lang = App::getLocale();
        return json_decode($this->service_first_desc)->$lang;
    }

    public function service_second_desc()
    {
        $lang = App::getLocale();
        return json_decode($this->service_second_desc)->$lang;
    }

    public function company_branch()
    {
        return $this->belongsTo(Company_branch::class);
    }

    public function service_branch()
    {
        return $this->belongsTo(Service_branch::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'service_user')
            ->withTimestamps()->withPivot(['Service_details', 'Service_file', 'status']);
    }

}

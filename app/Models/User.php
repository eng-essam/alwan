<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];

    public $guarded = ['id', 'created_at', 'updated_at'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function company()
    {
        return $this->belongsTo(Company_branch::class);
    }

//    public function payServics()
//    {
//        return $this->belongsToMany(Service::class, 'service_user')
//            ->withTimestamps()->withPivot(['Service_details', 'Service_file', 'status']);
//    }

    public function payProducts()
    {
        return $this->belongsToMany(Product::class, 'buy_products')
            ->withTimestamps()->withPivot([ 'address_id', 'order_status_id', 'product_quantity', 'product_price', 'order_id']);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function favoriteProducts()
    {
        return $this->belongsToMany(Product::class, 'favorites')->withTimestamps();
    }

    public function cartProducts()
    {
        return $this->belongsToMany(Product::class, 'carts')
            ->withPivot(['file', 'message'])
            ->withTimestamps();
    }
}

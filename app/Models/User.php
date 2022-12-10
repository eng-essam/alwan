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
        return $this->belongsTo(Company_branch::class, 'company_branch_id');
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
            ->withPivot(['file', 'details'])
            ->withTimestamps();
    }

    public function payServics()
    {
        return $this->belongsToMany(Service::class, 'buy_services')
            ->withPivot(['details', 'user_file', 'order_id', 'order_status_id'
                , 'order_status_message', 'address_id', 'admin_file', 'service_price'])
            ->withTimestamps();
    }

    public function servicsCurrent()
    {
        return $this->belongsToMany(Service::class, 'buy_services')
            ->withPivot(['details', 'user_file', 'order_id', 'order_status_id'
                , 'order_status_message', 'address_id', 'admin_file', 'service_price'])
            ->wherePivot('order_status_id', '!=', 8)
            ->withTimestamps();
    }

    public function servicsDone()
    {
        return $this->belongsToMany(Service::class, 'buy_services')
            ->withPivot(['details', 'user_file', 'order_id', 'order_status_id'
                , 'order_status_message', 'address_id', 'admin_file', 'service_price'])
            ->wherePivot('order_status_id', 8)
            ->withTimestamps();
    }

    public function payProducts()
    {
        return $this->belongsToMany(Product::class, 'buy_products')
            ->withPivot(['address_id', 'order_status_id', 'product_quantity'
                , 'product_price', 'order_id', 'details', 'user_file', 'admin_file'])
            ->withTimestamps();
    }

    public function ProductsCurrent()
    {
        return $this->belongsToMany(Product::class, 'buy_products')
            ->withPivot(['address_id', 'order_status_id', 'product_quantity'
                , 'product_price', 'order_id', 'details', 'user_file', 'admin_file'])
            ->wherePivot('order_status_id', '!=', 8)
            ->withTimestamps();
    }

    public function ProductsDone()
    {
        return $this->belongsToMany(Product::class, 'buy_products')
            ->withPivot(['address_id', 'order_status_id', 'product_quantity'
                , 'product_price', 'order_id', 'details', 'user_file', 'admin_file'])
            ->wherePivot('order_status_id', 8)
            ->withTimestamps();
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_permission')->withTimestamps();
    }

    public function adminNotifications()
    {
        return $this->hasMany(AdminNotification::class);
    }
}

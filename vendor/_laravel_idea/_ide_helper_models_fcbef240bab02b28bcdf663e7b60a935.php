<?php //7f92d8da6eeddfc7c87e50587d4b6e4f
/** @noinspection all */

namespace App\Models {

    use Database\Factories\AdFactory;
    use Database\Factories\Company_branchFactory;
    use Database\Factories\NotificationFactory;
    use Database\Factories\ProductFactory;
    use Database\Factories\Product_branchFactory;
    use Database\Factories\ServiceFactory;
    use Database\Factories\Service_branchFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Address_C;
    use LaravelIdea\Helper\App\Models\_IH_Address_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ad_C;
    use LaravelIdea\Helper\App\Models\_IH_Ad_QB;
    use LaravelIdea\Helper\App\Models\_IH_BuyProduct_C;
    use LaravelIdea\Helper\App\Models\_IH_BuyProduct_QB;
    use LaravelIdea\Helper\App\Models\_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\_IH_Company_branch_C;
    use LaravelIdea\Helper\App\Models\_IH_Company_branch_QB;
    use LaravelIdea\Helper\App\Models\_IH_Email_code_C;
    use LaravelIdea\Helper\App\Models\_IH_Email_code_QB;
    use LaravelIdea\Helper\App\Models\_IH_Favorite_C;
    use LaravelIdea\Helper\App\Models\_IH_Favorite_QB;
    use LaravelIdea\Helper\App\Models\_IH_Notification_C;
    use LaravelIdea\Helper\App\Models\_IH_Notification_QB;
    use LaravelIdea\Helper\App\Models\_IH_OrderStatus_C;
    use LaravelIdea\Helper\App\Models\_IH_OrderStatus_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_branch_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_branch_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_C;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_Service_branch_C;
    use LaravelIdea\Helper\App\Models\_IH_Service_branch_QB;
    use LaravelIdea\Helper\App\Models\_IH_Service_C;
    use LaravelIdea\Helper\App\Models\_IH_Service_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property string $ad_img
     * @property string $ad_url
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Ad_QB onWriteConnection()
     * @method _IH_Ad_QB newQuery()
     * @method static _IH_Ad_QB on(null|string $connection = null)
     * @method static _IH_Ad_QB query()
     * @method static _IH_Ad_QB with(array|string $relations)
     * @method _IH_Ad_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ad_C|Ad[] all()
     * @mixin _IH_Ad_QB
     * @method static AdFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Ad extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $region
     * @property string $city
     * @property string $fullAddress
     * @property string $addressType
     * @property bool $default
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Address_QB onWriteConnection()
     * @method _IH_Address_QB newQuery()
     * @method static _IH_Address_QB on(null|string $connection = null)
     * @method static _IH_Address_QB query()
     * @method static _IH_Address_QB with(array|string $relations)
     * @method _IH_Address_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Address_C|Address[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\App\Models\BuyProduct,address_id
     * @mixin _IH_Address_QB
     */
    class Address extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $product_id
     * @property int $order_id
     * @property int $product_quantity
     * @property float $product_price
     * @property string $status
     * @property int|null $address_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method BelongsTo|_IH_OrderStatus_QB status()
     * @method static _IH_BuyProduct_QB onWriteConnection()
     * @method _IH_BuyProduct_QB newQuery()
     * @method static _IH_BuyProduct_QB on(null|string $connection = null)
     * @method static _IH_BuyProduct_QB query()
     * @method static _IH_BuyProduct_QB with(array|string $relations)
     * @method _IH_BuyProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BuyProduct_C|BuyProduct[] all()
     * @ownLinks user_id,\App\Models\User,id|product_id,\App\Models\Product,id|address_id,\App\Models\Address,id
     * @mixin _IH_BuyProduct_QB
     */
    class BuyProduct extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $product_id
     * @property string $file
     * @property string $message
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Cart_QB onWriteConnection()
     * @method _IH_Cart_QB newQuery()
     * @method static _IH_Cart_QB on(null|string $connection = null)
     * @method static _IH_Cart_QB query()
     * @method static _IH_Cart_QB with(array|string $relations)
     * @method _IH_Cart_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Cart_C|Cart[] all()
     * @ownLinks user_id,\App\Models\User,id|product_id,\App\Models\Product,id
     * @mixin _IH_Cart_QB
     */
    class Cart extends Model {}
    
    /**
     * @property int $id
     * @property string $company_name
     * @property string $company_address
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @property _IH_Service_C|Service[] $services
     * @property-read int $services_count
     * @method HasMany|_IH_Service_QB services()
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method HasMany|_IH_User_QB users()
     * @method static _IH_Company_branch_QB onWriteConnection()
     * @method _IH_Company_branch_QB newQuery()
     * @method static _IH_Company_branch_QB on(null|string $connection = null)
     * @method static _IH_Company_branch_QB query()
     * @method static _IH_Company_branch_QB with(array|string $relations)
     * @method _IH_Company_branch_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Company_branch_C|Company_branch[] all()
     * @foreignLinks id,\App\Models\User,company_branch_id|id,\App\Models\Product,company_branch_id|id,\App\Models\Service,company_branch_id
     * @mixin _IH_Company_branch_QB
     * @method static Company_branchFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Company_branch extends Model {}
    
    /**
     * @property int $id
     * @property string $email
     * @property string $code
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Email_code_QB onWriteConnection()
     * @method _IH_Email_code_QB newQuery()
     * @method static _IH_Email_code_QB on(null|string $connection = null)
     * @method static _IH_Email_code_QB query()
     * @method static _IH_Email_code_QB with(array|string $relations)
     * @method _IH_Email_code_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Email_code_C|Email_code[] all()
     * @mixin _IH_Email_code_QB
     */
    class Email_code extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $product_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Favorite_QB onWriteConnection()
     * @method _IH_Favorite_QB newQuery()
     * @method static _IH_Favorite_QB on(null|string $connection = null)
     * @method static _IH_Favorite_QB query()
     * @method static _IH_Favorite_QB with(array|string $relations)
     * @method _IH_Favorite_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Favorite_C|Favorite[] all()
     * @ownLinks user_id,\App\Models\User,id|product_id,\App\Models\Product,id
     * @mixin _IH_Favorite_QB
     */
    class Favorite extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $notification_text
     * @property string $notification_img
     * @property bool $read_notification
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Notification_QB onWriteConnection()
     * @method _IH_Notification_QB newQuery()
     * @method static _IH_Notification_QB on(null|string $connection = null)
     * @method static _IH_Notification_QB query()
     * @method static _IH_Notification_QB with(array|string $relations)
     * @method _IH_Notification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Notification_C|Notification[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Notification_QB
     * @method static NotificationFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Notification extends Model {}
    
    /**
     * @property int $id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_BuyProduct_C|BuyProduct[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_BuyProduct_QB products()
     * @method static _IH_OrderStatus_QB onWriteConnection()
     * @method _IH_OrderStatus_QB newQuery()
     * @method static _IH_OrderStatus_QB on(null|string $connection = null)
     * @method static _IH_OrderStatus_QB query()
     * @method static _IH_OrderStatus_QB with(array|string $relations)
     * @method _IH_OrderStatus_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderStatus_C|OrderStatus[] all()
     * @mixin _IH_OrderStatus_QB
     */
    class OrderStatus extends Model {}
    
    /**
     * @property int $id
     * @property int $company_branch_id
     * @property int $product_branch_id
     * @property string $product_name
     * @property string $product_img
     * @property bool $is_offer
     * @property string $product_desc
     * @property string|null $product_quantity_price
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_User_C|User[] $cartUsers
     * @property-read int $cart_users_count
     * @method BelongsToMany|_IH_User_QB cartUsers()
     * @property Company_branch $company_branch
     * @method BelongsTo|_IH_Company_branch_QB company_branch()
     * @property _IH_User_C|User[] $favoriteUsers
     * @property-read int $favorite_users_count
     * @method BelongsToMany|_IH_User_QB favoriteUsers()
     * @property _IH_User_C|User[] $payUsers
     * @property-read int $pay_users_count
     * @method BelongsToMany|_IH_User_QB payUsers()
     * @property Product_branch $product_branch
     * @method BelongsTo|_IH_Product_branch_QB product_branch()
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks company_branch_id,\App\Models\Company_branch,id|product_branch_id,\App\Models\Product_branch,id
     * @foreignLinks id,\App\Models\Favorite,product_id|id,\App\Models\Cart,product_id|id,\App\Models\BuyProduct,product_id
     * @mixin _IH_Product_QB
     * @method static ProductFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Product extends Model {}
    
    /**
     * @property int $id
     * @property string $product_branch_name
     * @property string $product_branch_desc
     * @property string $product_branch_img
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @method static _IH_Product_branch_QB onWriteConnection()
     * @method _IH_Product_branch_QB newQuery()
     * @method static _IH_Product_branch_QB on(null|string $connection = null)
     * @method static _IH_Product_branch_QB query()
     * @method static _IH_Product_branch_QB with(array|string $relations)
     * @method _IH_Product_branch_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_branch_C|Product_branch[] all()
     * @foreignLinks id,\App\Models\Product,product_branch_id
     * @mixin _IH_Product_branch_QB
     * @method static Product_branchFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Product_branch extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method HasMany|_IH_User_QB users()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @foreignLinks id,\App\Models\User,role_id
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}
    
    /**
     * @property int $id
     * @property int $company_branch_id
     * @property int $service_branch_id
     * @property string $service_name
     * @property bool $is_offer
     * @property string $main_img
     * @property string $service_first_desc
     * @property string $service_second_desc
     * @property string $sub_img
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Company_branch $company_branch
     * @method BelongsTo|_IH_Company_branch_QB company_branch()
     * @property Service_branch $service_branch
     * @method BelongsTo|_IH_Service_branch_QB service_branch()
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method BelongsToMany|_IH_User_QB users()
     * @method static _IH_Service_QB onWriteConnection()
     * @method _IH_Service_QB newQuery()
     * @method static _IH_Service_QB on(null|string $connection = null)
     * @method static _IH_Service_QB query()
     * @method static _IH_Service_QB with(array|string $relations)
     * @method _IH_Service_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Service_C|Service[] all()
     * @ownLinks company_branch_id,\App\Models\Company_branch,id|service_branch_id,\App\Models\Service_branch,id
     * @mixin _IH_Service_QB
     * @method static ServiceFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Service extends Model {}
    
    /**
     * @property int $id
     * @property string $service_branch_img
     * @property string $service_branch_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Service_C|Service[] $services
     * @property-read int $services_count
     * @method HasMany|_IH_Service_QB services()
     * @method static _IH_Service_branch_QB onWriteConnection()
     * @method _IH_Service_branch_QB newQuery()
     * @method static _IH_Service_branch_QB on(null|string $connection = null)
     * @method static _IH_Service_branch_QB query()
     * @method static _IH_Service_branch_QB with(array|string $relations)
     * @method _IH_Service_branch_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Service_branch_C|Service_branch[] all()
     * @foreignLinks id,\App\Models\Service,service_branch_id
     * @mixin _IH_Service_branch_QB
     * @method static Service_branchFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Service_branch extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property int $role_id
     * @property int|null $company_branch_id
     * @property string $email
     * @property string|null $phoneKey
     * @property string|null $phone
     * @property string|null $fullPhone
     * @property string|null $img
     * @property Carbon|null $email_verified_at
     * @property string|null $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Address_C|Address[] $addresses
     * @property-read int $addresses_count
     * @method HasMany|_IH_Address_QB addresses()
     * @property _IH_Ad_C|Ad[] $ads
     * @property-read int $ads_count
     * @method HasMany|_IH_Ad_QB ads()
     * @property _IH_Product_C|Product[] $cartProducts
     * @property-read int $cart_products_count
     * @method BelongsToMany|_IH_Product_QB cartProducts()
     * @property Company_branch $company
     * @method BelongsTo|_IH_Company_branch_QB company()
     * @property _IH_Product_C|Product[] $favoriteProducts
     * @property-read int $favorite_products_count
     * @method BelongsToMany|_IH_Product_QB favoriteProducts()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Product_C|Product[] $payProducts
     * @property-read int $pay_products_count
     * @method BelongsToMany|_IH_Product_QB payProducts()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @ownLinks role_id,\App\Models\Role,id|company_branch_id,\App\Models\Company_branch,id
     * @foreignLinks id,\App\Models\Notification,user_id|id,\App\Models\Address,user_id|id,\App\Models\Favorite,user_id|id,\App\Models\Cart,user_id|id,\App\Models\BuyProduct,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}
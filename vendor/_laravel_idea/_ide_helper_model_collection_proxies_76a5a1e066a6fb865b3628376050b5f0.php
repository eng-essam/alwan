<?php //66b20c8096d7d39f993e5427d77f12d4
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use Illuminate\Notifications\Notification;
    use Laravel\Sanctum\Contracts\HasAbilities;
    
    /**
     * @property _IH_Ad_C|mixed $id
     * @property _IH_Ad_C|mixed $ad_img
     * @property _IH_Ad_C|mixed $ad_url
     * @property _IH_Ad_C|mixed $created_at
     * @property _IH_Ad_C|mixed $updated_at
     * @property _IH_Ad_C|mixed $user
     * @method _IH_Ad_C refresh()
     * @method _IH_Ad_C update(array $attributes = [], array $options = [])
     * @method _IH_Ad_C save(array $options = [])
     * @method _IH_Ad_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Ad_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Ad_C touch(null|string $attribute = null)
     * @method _IH_Ad_C fill(array $attributes)
     * @method _IH_Ad_C delete()
     */
    class _IH_Ad_CP {}
    
    /**
     * @property _IH_Address_C|mixed $id
     * @property _IH_Address_C|mixed $user_id
     * @property _IH_Address_C|mixed $region
     * @property _IH_Address_C|mixed $city
     * @property _IH_Address_C|mixed $fullAddress
     * @property _IH_Address_C|mixed $addressType
     * @property _IH_Address_C|mixed $created_at
     * @property _IH_Address_C|mixed $updated_at
     * @property _IH_Address_C|mixed $user
     * @method _IH_Address_C refresh()
     * @method _IH_Address_C update(array $attributes = [], array $options = [])
     * @method _IH_Address_C save(array $options = [])
     * @method _IH_Address_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Address_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Address_C touch(null|string $attribute = null)
     * @method _IH_Address_C fill(array $attributes)
     * @method _IH_Address_C delete()
     */
    class _IH_Address_CP {}
    
    /**
     * @property _IH_BuyProduct_C|mixed $id
     * @property _IH_BuyProduct_C|mixed $user_id
     * @property _IH_BuyProduct_C|mixed $product_id
     * @property _IH_BuyProduct_C|mixed $order_id
     * @property _IH_BuyProduct_C|mixed $product_quantity
     * @property _IH_BuyProduct_C|mixed $product_price
     * @property _IH_BuyProduct_C|mixed $address_id
     * @property _IH_BuyProduct_C|mixed $order_status_id
     * @property _IH_BuyProduct_C|mixed $details
     * @property _IH_BuyProduct_C|mixed $user_file
     * @property _IH_BuyProduct_C|mixed $created_at
     * @property _IH_BuyProduct_C|mixed $updated_at
     * @property _IH_BuyProduct_C|mixed $status
     * @method _IH_BuyProduct_C refresh()
     * @method _IH_BuyProduct_C update(array $attributes = [], array $options = [])
     * @method _IH_BuyProduct_C save(array $options = [])
     * @method _IH_BuyProduct_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_BuyProduct_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_BuyProduct_C touch(null|string $attribute = null)
     * @method _IH_BuyProduct_C fill(array $attributes)
     * @method _IH_BuyProduct_C delete()
     */
    class _IH_BuyProduct_CP {}
    
    /**
     * @property _IH_BuyService_C|mixed $id
     * @property _IH_BuyService_C|mixed $user_id
     * @property _IH_BuyService_C|mixed $service_id
     * @property _IH_BuyService_C|mixed $details
     * @property _IH_BuyService_C|mixed $user_file
     * @property _IH_BuyService_C|mixed $order_id
     * @property _IH_BuyService_C|mixed $order_status_id
     * @property _IH_BuyService_C|mixed $address_id
     * @property _IH_BuyService_C|mixed $admin_file
     * @property _IH_BuyService_C|mixed $service_price
     * @property _IH_BuyService_C|mixed $created_at
     * @property _IH_BuyService_C|mixed $updated_at
     * @property _IH_BuyService_C|mixed $address
     * @property _IH_BuyService_C|mixed $service
     * @property _IH_BuyService_C|mixed $status
     * @property _IH_BuyService_C|mixed $user
     * @method _IH_BuyService_C order_status_message()
     * @method _IH_BuyService_C refresh()
     * @method _IH_BuyService_C update(array $attributes = [], array $options = [])
     * @method _IH_BuyService_C save(array $options = [])
     * @method _IH_BuyService_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_BuyService_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_BuyService_C touch(null|string $attribute = null)
     * @method _IH_BuyService_C fill(array $attributes)
     * @method _IH_BuyService_C delete()
     */
    class _IH_BuyService_CP {}
    
    /**
     * @property _IH_Cart_C|mixed $id
     * @property _IH_Cart_C|mixed $user_id
     * @property _IH_Cart_C|mixed $product_id
     * @property _IH_Cart_C|mixed $file
     * @property _IH_Cart_C|mixed $details
     * @property _IH_Cart_C|mixed $created_at
     * @property _IH_Cart_C|mixed $updated_at
     * @method _IH_Cart_C refresh()
     * @method _IH_Cart_C update(array $attributes = [], array $options = [])
     * @method _IH_Cart_C save(array $options = [])
     * @method _IH_Cart_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Cart_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Cart_C touch(null|string $attribute = null)
     * @method _IH_Cart_C fill(array $attributes)
     * @method _IH_Cart_C delete()
     */
    class _IH_Cart_CP {}
    
    /**
     * @property _IH_Cobon_C|mixed $id
     * @property _IH_Cobon_C|mixed $cobon
     * @property _IH_Cobon_C|mixed $percentage
     * @property _IH_Cobon_C|mixed $created_at
     * @property _IH_Cobon_C|mixed $updated_at
     * @method _IH_Cobon_C refresh()
     * @method _IH_Cobon_C update(array $attributes = [], array $options = [])
     * @method _IH_Cobon_C save(array $options = [])
     * @method _IH_Cobon_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Cobon_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Cobon_C touch(null|string $attribute = null)
     * @method _IH_Cobon_C fill(array $attributes)
     * @method _IH_Cobon_C delete()
     */
    class _IH_Cobon_CP {}
    
    /**
     * @property _IH_Company_branch_C|mixed $id
     * @property _IH_Company_branch_C|mixed $company_name
     * @property _IH_Company_branch_C|mixed $company_address
     * @property _IH_Company_branch_C|mixed $created_at
     * @property _IH_Company_branch_C|mixed $updated_at
     * @method _IH_Company_branch_C company_name()
     * @method _IH_Company_branch_C company_address()
     * @method _IH_Company_branch_C refresh()
     * @method _IH_Company_branch_C update(array $attributes = [], array $options = [])
     * @method _IH_Company_branch_C save(array $options = [])
     * @method _IH_Company_branch_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Company_branch_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Company_branch_C touch(null|string $attribute = null)
     * @method _IH_Company_branch_C fill(array $attributes)
     * @method _IH_Company_branch_C delete()
     */
    class _IH_Company_branch_CP {}
    
    /**
     * @property _IH_Contact_C|mixed $id
     * @property _IH_Contact_C|mixed $name
     * @property _IH_Contact_C|mixed $email
     * @property _IH_Contact_C|mixed $message
     * @property _IH_Contact_C|mixed $created_at
     * @property _IH_Contact_C|mixed $updated_at
     * @method _IH_Contact_C refresh()
     * @method _IH_Contact_C update(array $attributes = [], array $options = [])
     * @method _IH_Contact_C save(array $options = [])
     * @method _IH_Contact_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Contact_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Contact_C touch(null|string $attribute = null)
     * @method _IH_Contact_C fill(array $attributes)
     * @method _IH_Contact_C delete()
     */
    class _IH_Contact_CP {}
    
    /**
     * @property _IH_Email_code_C|mixed $id
     * @property _IH_Email_code_C|mixed $email
     * @property _IH_Email_code_C|mixed $code
     * @property _IH_Email_code_C|mixed $created_at
     * @property _IH_Email_code_C|mixed $updated_at
     * @method _IH_Email_code_C refresh()
     * @method _IH_Email_code_C update(array $attributes = [], array $options = [])
     * @method _IH_Email_code_C save(array $options = [])
     * @method _IH_Email_code_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Email_code_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Email_code_C touch(null|string $attribute = null)
     * @method _IH_Email_code_C fill(array $attributes)
     * @method _IH_Email_code_C delete()
     */
    class _IH_Email_code_CP {}
    
    /**
     * @property _IH_Favorite_C|mixed $id
     * @property _IH_Favorite_C|mixed $user_id
     * @property _IH_Favorite_C|mixed $product_id
     * @property _IH_Favorite_C|mixed $created_at
     * @property _IH_Favorite_C|mixed $updated_at
     * @method _IH_Favorite_C refresh()
     * @method _IH_Favorite_C update(array $attributes = [], array $options = [])
     * @method _IH_Favorite_C save(array $options = [])
     * @method _IH_Favorite_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Favorite_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Favorite_C touch(null|string $attribute = null)
     * @method _IH_Favorite_C fill(array $attributes)
     * @method _IH_Favorite_C delete()
     */
    class _IH_Favorite_CP {}
    
    /**
     * @property _IH_Notification_C|mixed $id
     * @property _IH_Notification_C|mixed $user_id
     * @property _IH_Notification_C|mixed $notification_text
     * @property _IH_Notification_C|mixed $notification_img
     * @property _IH_Notification_C|mixed $read_notification
     * @property _IH_Notification_C|mixed $created_at
     * @property _IH_Notification_C|mixed $updated_at
     * @property _IH_Notification_C|mixed $user
     * @method _IH_Notification_C notification_text()
     * @method _IH_Notification_C refresh()
     * @method _IH_Notification_C update(array $attributes = [], array $options = [])
     * @method _IH_Notification_C save(array $options = [])
     * @method _IH_Notification_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Notification_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Notification_C touch(null|string $attribute = null)
     * @method _IH_Notification_C fill(array $attributes)
     * @method _IH_Notification_C delete()
     */
    class _IH_Notification_CP {}
    
    /**
     * @property _IH_OrderStatus_C|mixed $id
     * @property _IH_OrderStatus_C|mixed $created_at
     * @property _IH_OrderStatus_C|mixed $updated_at
     * @method _IH_OrderStatus_C status()
     * @method _IH_OrderStatus_C refresh()
     * @method _IH_OrderStatus_C update(array $attributes = [], array $options = [])
     * @method _IH_OrderStatus_C save(array $options = [])
     * @method _IH_OrderStatus_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_OrderStatus_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_OrderStatus_C touch(null|string $attribute = null)
     * @method _IH_OrderStatus_C fill(array $attributes)
     * @method _IH_OrderStatus_C delete()
     */
    class _IH_OrderStatus_CP {}
    
    /**
     * @property _IH_Permission_C|mixed $id
     * @property _IH_Permission_C|mixed $name
     * @property _IH_Permission_C|mixed $desc
     * @property _IH_Permission_C|mixed $created_at
     * @property _IH_Permission_C|mixed $updated_at
     * @method _IH_Permission_C name()
     * @method _IH_Permission_C desc()
     * @method _IH_Permission_C refresh()
     * @method _IH_Permission_C update(array $attributes = [], array $options = [])
     * @method _IH_Permission_C save(array $options = [])
     * @method _IH_Permission_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Permission_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Permission_C touch(null|string $attribute = null)
     * @method _IH_Permission_C fill(array $attributes)
     * @method _IH_Permission_C delete()
     */
    class _IH_Permission_CP {}
    
    /**
     * @property _IH_Product_C|mixed $company_branch
     * @property _IH_Product_C|mixed $product_branch
     * @method _IH_Product_C product_name($lang = null)
     * @method _IH_Product_C product_desc($lang = null)
     * @method _IH_Product_C refresh()
     * @method _IH_Product_C update(array $attributes = [], array $options = [])
     * @method _IH_Product_C save(array $options = [])
     * @method _IH_Product_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Product_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Product_C touch(null|string $attribute = null)
     * @method _IH_Product_C fill(array $attributes)
     * @method _IH_Product_C delete()
     */
    class _IH_Product_CP {}
    
    /**
     * @property _IH_Product_branch_C|mixed $id
     * @property _IH_Product_branch_C|mixed $product_branch_name
     * @property _IH_Product_branch_C|mixed $product_branch_desc
     * @property _IH_Product_branch_C|mixed $product_branch_img
     * @property _IH_Product_branch_C|mixed $created_at
     * @property _IH_Product_branch_C|mixed $updated_at
     * @property _IH_Product_branch_C|mixed $active
     * @method _IH_Product_branch_C product_branch_name($lang = null)
     * @method _IH_Product_branch_C product_branch_desc($lang = null)
     * @method _IH_Product_branch_C refresh()
     * @method _IH_Product_branch_C update(array $attributes = [], array $options = [])
     * @method _IH_Product_branch_C save(array $options = [])
     * @method _IH_Product_branch_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Product_branch_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Product_branch_C touch(null|string $attribute = null)
     * @method _IH_Product_branch_C fill(array $attributes)
     * @method _IH_Product_branch_C delete()
     */
    class _IH_Product_branch_CP {}
    
    /**
     * @property _IH_Role_C|mixed $id
     * @property _IH_Role_C|mixed $name
     * @property _IH_Role_C|mixed $created_at
     * @property _IH_Role_C|mixed $updated_at
     * @method _IH_Role_C refresh()
     * @method _IH_Role_C update(array $attributes = [], array $options = [])
     * @method _IH_Role_C save(array $options = [])
     * @method _IH_Role_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Role_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Role_C touch(null|string $attribute = null)
     * @method _IH_Role_C fill(array $attributes)
     * @method _IH_Role_C delete()
     */
    class _IH_Role_CP {}
    
    /**
     * @property _IH_Service_C|mixed $company_branch
     * @property _IH_Service_C|mixed $service_branch
     * @method _IH_Service_C service_first_desc($lang = null)
     * @method _IH_Service_C service_second_desc($lang = null)
     * @method _IH_Service_C service_name($lang = null)
     * @method _IH_Service_C refresh()
     * @method _IH_Service_C update(array $attributes = [], array $options = [])
     * @method _IH_Service_C save(array $options = [])
     * @method _IH_Service_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Service_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Service_C touch(null|string $attribute = null)
     * @method _IH_Service_C fill(array $attributes)
     * @method _IH_Service_C delete()
     */
    class _IH_Service_CP {}
    
    /**
     * @property _IH_Service_branch_C|mixed $id
     * @property _IH_Service_branch_C|mixed $service_branch_img
     * @property _IH_Service_branch_C|mixed $service_branch_name
     * @property _IH_Service_branch_C|mixed $service_branch_desc
     * @property _IH_Service_branch_C|mixed $created_at
     * @property _IH_Service_branch_C|mixed $updated_at
     * @property _IH_Service_branch_C|mixed $active
     * @method _IH_Service_branch_C service_branch_name($lang = null)
     * @method _IH_Service_branch_C service_branch_desc($lang = null)
     * @method _IH_Service_branch_C refresh()
     * @method _IH_Service_branch_C update(array $attributes = [], array $options = [])
     * @method _IH_Service_branch_C save(array $options = [])
     * @method _IH_Service_branch_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Service_branch_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_Service_branch_C touch(null|string $attribute = null)
     * @method _IH_Service_branch_C fill(array $attributes)
     * @method _IH_Service_branch_C delete()
     */
    class _IH_Service_branch_CP {}
    
    /**
     * @property _IH_User_C|mixed $id
     * @property _IH_User_C|mixed $name
     * @property _IH_User_C|mixed $role_id
     * @property _IH_User_C|mixed $company_branch_id
     * @property _IH_User_C|mixed $email
     * @property _IH_User_C|mixed $phoneKey
     * @property _IH_User_C|mixed $phone
     * @property _IH_User_C|mixed $fullPhone
     * @property _IH_User_C|mixed $img
     * @property _IH_User_C|mixed $email_verified_at
     * @property _IH_User_C|mixed $password
     * @property _IH_User_C|mixed $remember_token
     * @property _IH_User_C|mixed $created_at
     * @property _IH_User_C|mixed $updated_at
     * @property _IH_User_C|mixed $company
     * @property _IH_User_C|mixed $role
     * @method _IH_User_C createToken(string $name, array $abilities = ['*'])
     * @method _IH_User_C tokenCan(string $ability)
     * @method _IH_User_C currentAccessToken()
     * @method _IH_User_C withAccessToken(HasAbilities $accessToken)
     * @method _IH_User_C notifyNow($instance, array $channels = null)
     * @method _IH_User_C notify($instance)
     * @method _IH_User_C routeNotificationFor(string $driver, Notification|null $notification = null)
     * @method _IH_User_C can(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C canAny(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C cant(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C cannot(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C sendPasswordResetNotification(string $token)
     * @method _IH_User_C getEmailForPasswordReset()
     * @method _IH_User_C sendEmailVerificationNotification()
     * @method _IH_User_C getEmailForVerification()
     * @method _IH_User_C markEmailAsVerified()
     * @method _IH_User_C hasVerifiedEmail()
     * @method _IH_User_C getRememberTokenName()
     * @method _IH_User_C getAuthPassword()
     * @method _IH_User_C getAuthIdentifierForBroadcasting()
     * @method _IH_User_C getAuthIdentifier()
     * @method _IH_User_C getRememberToken()
     * @method _IH_User_C setRememberToken(string $value)
     * @method _IH_User_C getAuthIdentifierName()
     * @method _IH_User_C refresh()
     * @method _IH_User_C update(array $attributes = [], array $options = [])
     * @method _IH_User_C save(array $options = [])
     * @method _IH_User_C increment(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_User_C decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method _IH_User_C touch(null|string $attribute = null)
     * @method _IH_User_C fill(array $attributes)
     * @method _IH_User_C delete()
     */
    class _IH_User_CP {}
}
<?php //6fe6bf2bc96b0623acca84287e581630
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
     * @property _IH_Address_C|mixed $default
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
     * @property _IH_Product_C|mixed $id
     * @property _IH_Product_C|mixed $company_branch_id
     * @property _IH_Product_C|mixed $product_branch_id
     * @property _IH_Product_C|mixed $product_name
     * @property _IH_Product_C|mixed $product_img
     * @property _IH_Product_C|mixed $is_offer
     * @property _IH_Product_C|mixed $product_desc
     * @property _IH_Product_C|mixed $Product_price
     * @property _IH_Product_C|mixed $created_at
     * @property _IH_Product_C|mixed $updated_at
     * @property _IH_Product_C|mixed $company_branch
     * @property _IH_Product_C|mixed $product_branch
     * @method _IH_Product_C product_name()
     * @method _IH_Product_C product_desc()
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
     * @method _IH_Product_branch_C product_branch_name()
     * @method _IH_Product_branch_C product_branch_desc()
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
     * @property _IH_Service_C|mixed $id
     * @property _IH_Service_C|mixed $company_branch_id
     * @property _IH_Service_C|mixed $service_branch_id
     * @property _IH_Service_C|mixed $service_name
     * @property _IH_Service_C|mixed $is_offer
     * @property _IH_Service_C|mixed $main_img
     * @property _IH_Service_C|mixed $service_first_desc
     * @property _IH_Service_C|mixed $service_second_desc
     * @property _IH_Service_C|mixed $sub_img
     * @property _IH_Service_C|mixed $created_at
     * @property _IH_Service_C|mixed $updated_at
     * @property _IH_Service_C|mixed $company_branch
     * @property _IH_Service_C|mixed $service_branch
     * @method _IH_Service_C service_first_desc()
     * @method _IH_Service_C service_second_desc()
     * @method _IH_Service_C service_name()
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
     * @property _IH_Service_branch_C|mixed $created_at
     * @property _IH_Service_branch_C|mixed $updated_at
     * @method _IH_Service_branch_C service_branch_name()
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
     * @method _IH_User_C notifyNow($instance, array $channels = null)
     * @method _IH_User_C notify($instance)
     * @method _IH_User_C routeNotificationFor(string $driver, Notification|null $notification = null)
     * @method _IH_User_C tokens()
     * @method _IH_User_C createToken(string $name, array $abilities = ['*'])
     * @method _IH_User_C tokenCan(string $ability)
     * @method _IH_User_C currentAccessToken()
     * @method _IH_User_C withAccessToken(HasAbilities $accessToken)
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
     * @method _IH_User_C can(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C canAny(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C cant(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C cannot(iterable|string $abilities, array|mixed $arguments = [])
     * @method _IH_User_C sendPasswordResetNotification(string $token)
     * @method _IH_User_C getEmailForPasswordReset()
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
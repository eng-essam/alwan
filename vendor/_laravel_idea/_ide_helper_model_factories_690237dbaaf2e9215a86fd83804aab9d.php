<?php //21aacffb5ac43c8c35720ea87926757d
/** @noinspection all */

namespace Database\Factories {

    use Illuminate\Database\Eloquent\Factories\Factory;
    
    /**
     * @method $this forUser($attributes = [])
     */
    class AdFactory extends Factory {}
    
    /**
     * @method $this hasProducts(int $count = 1, $attributes = [])
     * @method $this hasServices(int $count = 1, $attributes = [])
     * @method $this hasUsers(int $count = 1, $attributes = [])
     */
    class Company_branchFactory extends Factory {}
    
    /**
     * @method $this forUser($attributes = [])
     */
    class NotificationFactory extends Factory {}
    
    /**
     * @method $this hasCartUsers(int $count = 1, $attributes = [])
     * @method $this forCompany_branch($attributes = [])
     * @method $this hasFavoriteUsers(int $count = 1, $attributes = [])
     * @method $this hasPayUsers(int $count = 1, $attributes = [])
     * @method $this forProduct_branch($attributes = [])
     */
    class ProductFactory extends Factory {}
    
    /**
     * @method $this hasProducts(int $count = 1, $attributes = [])
     */
    class Product_branchFactory extends Factory {}
    
    /**
     * @method $this forCompany_branch($attributes = [])
     * @method $this hasPayUsers(int $count = 1, $attributes = [])
     * @method $this forService_branch($attributes = [])
     */
    class ServiceFactory extends Factory {}
    
    /**
     * @method $this hasServices(int $count = 1, $attributes = [])
     */
    class Service_branchFactory extends Factory {}
    
    /**
     * @method $this hasProductsCurrent(int $count = 1, $attributes = [])
     * @method $this hasProductsDone(int $count = 1, $attributes = [])
     * @method $this hasAddresses(int $count = 1, $attributes = [])
     * @method $this hasAdminNotifications(int $count = 1, $attributes = [])
     * @method $this hasAds(int $count = 1, $attributes = [])
     * @method $this hasCartProducts(int $count = 1, $attributes = [])
     * @method $this forCompany($attributes = [])
     * @method $this hasFavoriteProducts(int $count = 1, $attributes = [])
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this hasPayProducts(int $count = 1, $attributes = [])
     * @method $this hasPayServics(int $count = 1, $attributes = [])
     * @method $this hasPermissions(int $count = 1, $attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this forRole($attributes = [])
     * @method $this hasServicsCurrent(int $count = 1, $attributes = [])
     * @method $this hasServicsDone(int $count = 1, $attributes = [])
     * @method $this hasTokens(int $count = 1, $attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     */
    class UserFactory extends Factory {}
}
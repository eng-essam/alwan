<?php //5be8f91d0076706b4f75a5196a298689
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
     * @method $this forCompany_branch($attributes = [])
     * @method $this forProduct_branch($attributes = [])
     * @method $this hasUsers(int $count = 1, $attributes = [])
     */
    class ProductFactory extends Factory {}
    
    /**
     * @method $this hasProducts(int $count = 1, $attributes = [])
     */
    class Product_branchFactory extends Factory {}
    
    /**
     * @method $this forCompany_branch($attributes = [])
     * @method $this forService_branch($attributes = [])
     * @method $this hasUsers(int $count = 1, $attributes = [])
     */
    class ServiceFactory extends Factory {}
    
    /**
     * @method $this hasServices(int $count = 1, $attributes = [])
     */
    class Service_branchFactory extends Factory {}
    
    /**
     * @method $this hasAds(int $count = 1, $attributes = [])
     * @method $this forCompany($attributes = [])
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this hasProducts(int $count = 1, $attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this forRole($attributes = [])
     * @method $this hasServics(int $count = 1, $attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     */
    class UserFactory extends Factory {}
}
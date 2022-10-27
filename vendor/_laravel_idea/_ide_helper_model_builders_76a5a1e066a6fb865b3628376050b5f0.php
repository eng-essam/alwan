<?php //4f895b8383537833eef84eca5709cb53
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Ad;
    use App\Models\Company_branch;
    use App\Models\Notification;
    use App\Models\Product;
    use App\Models\Product_branch;
    use App\Models\Role;
    use App\Models\Service;
    use App\Models\Service_branch;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Ad|null getOrPut($key, $value)
     * @method Ad|$this shift(int $count = 1)
     * @method Ad|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Ad|$this pop(int $count = 1)
     * @method Ad|null pull($key, $default = null)
     * @method Ad|null last(callable $callback = null, $default = null)
     * @method Ad|$this random($number = null)
     * @method Ad|null sole($key = null, $operator = null, $value = null)
     * @method Ad|null get($key, $default = null)
     * @method Ad|null first(callable $callback = null, $default = null)
     * @method Ad|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Ad|null find($key, $default = null)
     * @method Ad[] all()
     */
    class _IH_Ad_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ad[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Ad_QB whereId($value)
     * @method _IH_Ad_QB whereAdImg($value)
     * @method _IH_Ad_QB whereAdUrl($value)
     * @method _IH_Ad_QB whereCreatedAt($value)
     * @method _IH_Ad_QB whereUpdatedAt($value)
     * @method Ad baseSole(array|string $columns = ['*'])
     * @method Ad create(array $attributes = [])
     * @method _IH_Ad_C|Ad[] cursor()
     * @method Ad|null|_IH_Ad_C|Ad[] find($id, array|string $columns = ['*'])
     * @method _IH_Ad_C|Ad[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Ad|_IH_Ad_C|Ad[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ad|_IH_Ad_C|Ad[] findOrFail($id, array|string $columns = ['*'])
     * @method Ad|_IH_Ad_C|Ad[] findOrNew($id, array|string $columns = ['*'])
     * @method Ad first(array|string $columns = ['*'])
     * @method Ad firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ad firstOrCreate(array $attributes = [], array $values = [])
     * @method Ad firstOrFail(array|string $columns = ['*'])
     * @method Ad firstOrNew(array $attributes = [], array $values = [])
     * @method Ad firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ad forceCreate(array $attributes)
     * @method _IH_Ad_C|Ad[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ad_C|Ad[] get(array|string $columns = ['*'])
     * @method Ad getModel()
     * @method Ad[] getModels(array|string $columns = ['*'])
     * @method _IH_Ad_C|Ad[] hydrate(array $items)
     * @method Ad make(array $attributes = [])
     * @method Ad newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ad[]|_IH_Ad_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Ad[]|_IH_Ad_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ad sole(array|string $columns = ['*'])
     * @method Ad updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Ad_QB extends _BaseBuilder {}
    
    /**
     * @method Company_branch|null getOrPut($key, $value)
     * @method Company_branch|$this shift(int $count = 1)
     * @method Company_branch|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Company_branch|$this pop(int $count = 1)
     * @method Company_branch|null pull($key, $default = null)
     * @method Company_branch|null last(callable $callback = null, $default = null)
     * @method Company_branch|$this random($number = null)
     * @method Company_branch|null sole($key = null, $operator = null, $value = null)
     * @method Company_branch|null get($key, $default = null)
     * @method Company_branch|null first(callable $callback = null, $default = null)
     * @method Company_branch|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Company_branch|null find($key, $default = null)
     * @method Company_branch[] all()
     */
    class _IH_Company_branch_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Company_branch[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Company_branch_QB whereId($value)
     * @method _IH_Company_branch_QB whereCompanyName($value)
     * @method _IH_Company_branch_QB whereCompanyAddress($value)
     * @method _IH_Company_branch_QB whereCreatedAt($value)
     * @method _IH_Company_branch_QB whereUpdatedAt($value)
     * @method Company_branch baseSole(array|string $columns = ['*'])
     * @method Company_branch create(array $attributes = [])
     * @method _IH_Company_branch_C|Company_branch[] cursor()
     * @method Company_branch|null|_IH_Company_branch_C|Company_branch[] find($id, array|string $columns = ['*'])
     * @method _IH_Company_branch_C|Company_branch[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Company_branch|_IH_Company_branch_C|Company_branch[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Company_branch|_IH_Company_branch_C|Company_branch[] findOrFail($id, array|string $columns = ['*'])
     * @method Company_branch|_IH_Company_branch_C|Company_branch[] findOrNew($id, array|string $columns = ['*'])
     * @method Company_branch first(array|string $columns = ['*'])
     * @method Company_branch firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Company_branch firstOrCreate(array $attributes = [], array $values = [])
     * @method Company_branch firstOrFail(array|string $columns = ['*'])
     * @method Company_branch firstOrNew(array $attributes = [], array $values = [])
     * @method Company_branch firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Company_branch forceCreate(array $attributes)
     * @method _IH_Company_branch_C|Company_branch[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Company_branch_C|Company_branch[] get(array|string $columns = ['*'])
     * @method Company_branch getModel()
     * @method Company_branch[] getModels(array|string $columns = ['*'])
     * @method _IH_Company_branch_C|Company_branch[] hydrate(array $items)
     * @method Company_branch make(array $attributes = [])
     * @method Company_branch newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Company_branch[]|_IH_Company_branch_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Company_branch[]|_IH_Company_branch_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Company_branch sole(array|string $columns = ['*'])
     * @method Company_branch updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Company_branch_QB extends _BaseBuilder {}
    
    /**
     * @method Notification|null getOrPut($key, $value)
     * @method Notification|$this shift(int $count = 1)
     * @method Notification|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Notification|$this pop(int $count = 1)
     * @method Notification|null pull($key, $default = null)
     * @method Notification|null last(callable $callback = null, $default = null)
     * @method Notification|$this random($number = null)
     * @method Notification|null sole($key = null, $operator = null, $value = null)
     * @method Notification|null get($key, $default = null)
     * @method Notification|null first(callable $callback = null, $default = null)
     * @method Notification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Notification|null find($key, $default = null)
     * @method Notification[] all()
     */
    class _IH_Notification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Notification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Notification_QB whereId($value)
     * @method _IH_Notification_QB whereUserId($value)
     * @method _IH_Notification_QB whereNotificationText($value)
     * @method _IH_Notification_QB whereNotificationImg($value)
     * @method _IH_Notification_QB whereReadNotification($value)
     * @method _IH_Notification_QB whereCreatedAt($value)
     * @method _IH_Notification_QB whereUpdatedAt($value)
     * @method Notification baseSole(array|string $columns = ['*'])
     * @method Notification create(array $attributes = [])
     * @method _IH_Notification_C|Notification[] cursor()
     * @method Notification|null|_IH_Notification_C|Notification[] find($id, array|string $columns = ['*'])
     * @method _IH_Notification_C|Notification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Notification|_IH_Notification_C|Notification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Notification|_IH_Notification_C|Notification[] findOrFail($id, array|string $columns = ['*'])
     * @method Notification|_IH_Notification_C|Notification[] findOrNew($id, array|string $columns = ['*'])
     * @method Notification first(array|string $columns = ['*'])
     * @method Notification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Notification firstOrCreate(array $attributes = [], array $values = [])
     * @method Notification firstOrFail(array|string $columns = ['*'])
     * @method Notification firstOrNew(array $attributes = [], array $values = [])
     * @method Notification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Notification forceCreate(array $attributes)
     * @method _IH_Notification_C|Notification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Notification_C|Notification[] get(array|string $columns = ['*'])
     * @method Notification getModel()
     * @method Notification[] getModels(array|string $columns = ['*'])
     * @method _IH_Notification_C|Notification[] hydrate(array $items)
     * @method Notification make(array $attributes = [])
     * @method Notification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Notification[]|_IH_Notification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Notification[]|_IH_Notification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Notification sole(array|string $columns = ['*'])
     * @method Notification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Notification_QB extends _BaseBuilder {}
    
    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, $default = null)
     * @method Product|null last(callable $callback = null, $default = null)
     * @method Product|$this random($number = null)
     * @method Product|null sole($key = null, $operator = null, $value = null)
     * @method Product|null get($key, $default = null)
     * @method Product|null first(callable $callback = null, $default = null)
     * @method Product|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Product_QB whereId($value)
     * @method _IH_Product_QB whereCompanyBranchId($value)
     * @method _IH_Product_QB whereProductBranchId($value)
     * @method _IH_Product_QB whereProductName($value)
     * @method _IH_Product_QB whereProductImg($value)
     * @method _IH_Product_QB whereProductDesc($value)
     * @method _IH_Product_QB whereProductPrice($value)
     * @method _IH_Product_QB whereCreatedAt($value)
     * @method _IH_Product_QB whereUpdatedAt($value)
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array|string $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array|string $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Product_QB extends _BaseBuilder {}
    
    /**
     * @method Product_branch|null getOrPut($key, $value)
     * @method Product_branch|$this shift(int $count = 1)
     * @method Product_branch|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Product_branch|$this pop(int $count = 1)
     * @method Product_branch|null pull($key, $default = null)
     * @method Product_branch|null last(callable $callback = null, $default = null)
     * @method Product_branch|$this random($number = null)
     * @method Product_branch|null sole($key = null, $operator = null, $value = null)
     * @method Product_branch|null get($key, $default = null)
     * @method Product_branch|null first(callable $callback = null, $default = null)
     * @method Product_branch|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Product_branch|null find($key, $default = null)
     * @method Product_branch[] all()
     */
    class _IH_Product_branch_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product_branch[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Product_branch_QB whereId($value)
     * @method _IH_Product_branch_QB whereProductBranchName($value)
     * @method _IH_Product_branch_QB whereProductBranchImg($value)
     * @method _IH_Product_branch_QB whereCreatedAt($value)
     * @method _IH_Product_branch_QB whereUpdatedAt($value)
     * @method Product_branch baseSole(array|string $columns = ['*'])
     * @method Product_branch create(array $attributes = [])
     * @method _IH_Product_branch_C|Product_branch[] cursor()
     * @method Product_branch|null|_IH_Product_branch_C|Product_branch[] find($id, array|string $columns = ['*'])
     * @method _IH_Product_branch_C|Product_branch[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Product_branch|_IH_Product_branch_C|Product_branch[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product_branch|_IH_Product_branch_C|Product_branch[] findOrFail($id, array|string $columns = ['*'])
     * @method Product_branch|_IH_Product_branch_C|Product_branch[] findOrNew($id, array|string $columns = ['*'])
     * @method Product_branch first(array|string $columns = ['*'])
     * @method Product_branch firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product_branch firstOrCreate(array $attributes = [], array $values = [])
     * @method Product_branch firstOrFail(array|string $columns = ['*'])
     * @method Product_branch firstOrNew(array $attributes = [], array $values = [])
     * @method Product_branch firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product_branch forceCreate(array $attributes)
     * @method _IH_Product_branch_C|Product_branch[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_branch_C|Product_branch[] get(array|string $columns = ['*'])
     * @method Product_branch getModel()
     * @method Product_branch[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_branch_C|Product_branch[] hydrate(array $items)
     * @method Product_branch make(array $attributes = [])
     * @method Product_branch newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product_branch[]|_IH_Product_branch_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product_branch[]|_IH_Product_branch_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product_branch sole(array|string $columns = ['*'])
     * @method Product_branch updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Product_branch_QB extends _BaseBuilder {}
    
    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, $default = null)
     * @method Role|null last(callable $callback = null, $default = null)
     * @method Role|$this random($number = null)
     * @method Role|null sole($key = null, $operator = null, $value = null)
     * @method Role|null get($key, $default = null)
     * @method Role|null first(callable $callback = null, $default = null)
     * @method Role|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array|string $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array|string $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}
    
    /**
     * @method Service|null getOrPut($key, $value)
     * @method Service|$this shift(int $count = 1)
     * @method Service|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Service|$this pop(int $count = 1)
     * @method Service|null pull($key, $default = null)
     * @method Service|null last(callable $callback = null, $default = null)
     * @method Service|$this random($number = null)
     * @method Service|null sole($key = null, $operator = null, $value = null)
     * @method Service|null get($key, $default = null)
     * @method Service|null first(callable $callback = null, $default = null)
     * @method Service|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Service|null find($key, $default = null)
     * @method Service[] all()
     */
    class _IH_Service_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Service[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Service_QB whereId($value)
     * @method _IH_Service_QB whereCompanyBranchId($value)
     * @method _IH_Service_QB whereServiceBranchId($value)
     * @method _IH_Service_QB whereServiceName($value)
     * @method _IH_Service_QB whereMainImg($value)
     * @method _IH_Service_QB whereServiceDesc($value)
     * @method _IH_Service_QB whereSubImg($value)
     * @method _IH_Service_QB whereCreatedAt($value)
     * @method _IH_Service_QB whereUpdatedAt($value)
     * @method Service baseSole(array|string $columns = ['*'])
     * @method Service create(array $attributes = [])
     * @method _IH_Service_C|Service[] cursor()
     * @method Service|null|_IH_Service_C|Service[] find($id, array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service|_IH_Service_C|Service[] findOrFail($id, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOrNew($id, array|string $columns = ['*'])
     * @method Service first(array|string $columns = ['*'])
     * @method Service firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service firstOrCreate(array $attributes = [], array $values = [])
     * @method Service firstOrFail(array|string $columns = ['*'])
     * @method Service firstOrNew(array $attributes = [], array $values = [])
     * @method Service firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Service forceCreate(array $attributes)
     * @method _IH_Service_C|Service[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Service_C|Service[] get(array|string $columns = ['*'])
     * @method Service getModel()
     * @method Service[] getModels(array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] hydrate(array $items)
     * @method Service make(array $attributes = [])
     * @method Service newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Service[]|_IH_Service_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Service[]|_IH_Service_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Service sole(array|string $columns = ['*'])
     * @method Service updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Service_QB extends _BaseBuilder {}
    
    /**
     * @method Service_branch|null getOrPut($key, $value)
     * @method Service_branch|$this shift(int $count = 1)
     * @method Service_branch|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Service_branch|$this pop(int $count = 1)
     * @method Service_branch|null pull($key, $default = null)
     * @method Service_branch|null last(callable $callback = null, $default = null)
     * @method Service_branch|$this random($number = null)
     * @method Service_branch|null sole($key = null, $operator = null, $value = null)
     * @method Service_branch|null get($key, $default = null)
     * @method Service_branch|null first(callable $callback = null, $default = null)
     * @method Service_branch|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Service_branch|null find($key, $default = null)
     * @method Service_branch[] all()
     */
    class _IH_Service_branch_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Service_branch[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Service_branch_QB whereId($value)
     * @method _IH_Service_branch_QB whereServiceBranchImg($value)
     * @method _IH_Service_branch_QB whereServiceBranchName($value)
     * @method _IH_Service_branch_QB whereCreatedAt($value)
     * @method _IH_Service_branch_QB whereUpdatedAt($value)
     * @method Service_branch baseSole(array|string $columns = ['*'])
     * @method Service_branch create(array $attributes = [])
     * @method _IH_Service_branch_C|Service_branch[] cursor()
     * @method Service_branch|null|_IH_Service_branch_C|Service_branch[] find($id, array|string $columns = ['*'])
     * @method _IH_Service_branch_C|Service_branch[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Service_branch|_IH_Service_branch_C|Service_branch[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service_branch|_IH_Service_branch_C|Service_branch[] findOrFail($id, array|string $columns = ['*'])
     * @method Service_branch|_IH_Service_branch_C|Service_branch[] findOrNew($id, array|string $columns = ['*'])
     * @method Service_branch first(array|string $columns = ['*'])
     * @method Service_branch firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service_branch firstOrCreate(array $attributes = [], array $values = [])
     * @method Service_branch firstOrFail(array|string $columns = ['*'])
     * @method Service_branch firstOrNew(array $attributes = [], array $values = [])
     * @method Service_branch firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Service_branch forceCreate(array $attributes)
     * @method _IH_Service_branch_C|Service_branch[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Service_branch_C|Service_branch[] get(array|string $columns = ['*'])
     * @method Service_branch getModel()
     * @method Service_branch[] getModels(array|string $columns = ['*'])
     * @method _IH_Service_branch_C|Service_branch[] hydrate(array $items)
     * @method Service_branch make(array $attributes = [])
     * @method Service_branch newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Service_branch[]|_IH_Service_branch_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Service_branch[]|_IH_Service_branch_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Service_branch sole(array|string $columns = ['*'])
     * @method Service_branch updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Service_branch_QB extends _BaseBuilder {}
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random($number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereImg($value)
     * @method _IH_User_QB whereRoleId($value)
     * @method _IH_User_QB whereCompanyBranchId($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB wherePhonekey($value)
     * @method _IH_User_QB wherePhone($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
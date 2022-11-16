<?php //240ae2c75414bf9536f7a83c02ccb1c2
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Ad;
    use App\Models\Address;
    use App\Models\BuyProduct;
    use App\Models\Cart;
    use App\Models\Company_branch;
    use App\Models\Email_code;
    use App\Models\Favorite;
    use App\Models\Notification;
    use App\Models\OrderStatus;
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
     * @property-read _IH_Ad_CP $keyBy
     * @property-read _IH_Ad_CP $partition
     * @property-read _IH_Ad_CP $max
     * @property-read _IH_Ad_CP $doesntContain
     * @property-read _IH_Ad_CP $flatMap
     * @property-read _IH_Ad_CP $each
     * @property-read _IH_Ad_CP $map
     * @property-read _IH_Ad_CP $filter
     * @property-read _IH_Ad_CP $unique
     * @property-read _IH_Ad_CP $groupBy
     * @property-read _IH_Ad_CP $sortBy
     * @property-read _IH_Ad_CP $contains
     * @property-read _IH_Ad_CP $sum
     * @property-read _IH_Ad_CP $until
     * @property-read _IH_Ad_CP $every
     * @property-read _IH_Ad_CP $average
     * @property-read _IH_Ad_CP $when
     * @property-read _IH_Ad_CP $some
     * @property-read _IH_Ad_CP $skipWhile
     * @property-read _IH_Ad_CP $sortByDesc
     * @property-read _IH_Ad_CP $unless
     * @property-read _IH_Ad_CP $takeUntil
     * @property-read _IH_Ad_CP $avg
     * @property-read _IH_Ad_CP $skipUntil
     * @property-read _IH_Ad_CP $first
     * @property-read _IH_Ad_CP $takeWhile
     * @property-read _IH_Ad_CP $min
     * @property-read _IH_Ad_CP $reject
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
     * @method Address|null getOrPut($key, $value)
     * @method Address|$this shift(int $count = 1)
     * @method Address|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Address|$this pop(int $count = 1)
     * @method Address|null pull($key, $default = null)
     * @method Address|null last(callable $callback = null, $default = null)
     * @method Address|$this random($number = null)
     * @method Address|null sole($key = null, $operator = null, $value = null)
     * @method Address|null get($key, $default = null)
     * @method Address|null first(callable $callback = null, $default = null)
     * @method Address|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Address|null find($key, $default = null)
     * @method Address[] all()
     * @property-read _IH_Address_CP $keyBy
     * @property-read _IH_Address_CP $partition
     * @property-read _IH_Address_CP $max
     * @property-read _IH_Address_CP $doesntContain
     * @property-read _IH_Address_CP $flatMap
     * @property-read _IH_Address_CP $each
     * @property-read _IH_Address_CP $map
     * @property-read _IH_Address_CP $filter
     * @property-read _IH_Address_CP $unique
     * @property-read _IH_Address_CP $groupBy
     * @property-read _IH_Address_CP $sortBy
     * @property-read _IH_Address_CP $contains
     * @property-read _IH_Address_CP $sum
     * @property-read _IH_Address_CP $until
     * @property-read _IH_Address_CP $every
     * @property-read _IH_Address_CP $average
     * @property-read _IH_Address_CP $when
     * @property-read _IH_Address_CP $some
     * @property-read _IH_Address_CP $skipWhile
     * @property-read _IH_Address_CP $sortByDesc
     * @property-read _IH_Address_CP $unless
     * @property-read _IH_Address_CP $takeUntil
     * @property-read _IH_Address_CP $avg
     * @property-read _IH_Address_CP $skipUntil
     * @property-read _IH_Address_CP $first
     * @property-read _IH_Address_CP $takeWhile
     * @property-read _IH_Address_CP $min
     * @property-read _IH_Address_CP $reject
     */
    class _IH_Address_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Address[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Address_QB whereId($value)
     * @method _IH_Address_QB whereUserId($value)
     * @method _IH_Address_QB whereRegion($value)
     * @method _IH_Address_QB whereCity($value)
     * @method _IH_Address_QB whereFulladdress($value)
     * @method _IH_Address_QB whereAddresstype($value)
     * @method _IH_Address_QB whereDefault($value)
     * @method _IH_Address_QB whereCreatedAt($value)
     * @method _IH_Address_QB whereUpdatedAt($value)
     * @method Address baseSole(array|string $columns = ['*'])
     * @method Address create(array $attributes = [])
     * @method _IH_Address_C|Address[] cursor()
     * @method Address|null|_IH_Address_C|Address[] find($id, array|string $columns = ['*'])
     * @method _IH_Address_C|Address[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Address|_IH_Address_C|Address[] findOrFail($id, array|string $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOrNew($id, array|string $columns = ['*'])
     * @method Address first(array|string $columns = ['*'])
     * @method Address firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Address firstOrCreate(array $attributes = [], array $values = [])
     * @method Address firstOrFail(array|string $columns = ['*'])
     * @method Address firstOrNew(array $attributes = [], array $values = [])
     * @method Address firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Address forceCreate(array $attributes)
     * @method _IH_Address_C|Address[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Address_C|Address[] get(array|string $columns = ['*'])
     * @method Address getModel()
     * @method Address[] getModels(array|string $columns = ['*'])
     * @method _IH_Address_C|Address[] hydrate(array $items)
     * @method Address make(array $attributes = [])
     * @method Address newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Address[]|_IH_Address_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Address[]|_IH_Address_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Address sole(array|string $columns = ['*'])
     * @method Address updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Address_QB extends _BaseBuilder {}
    
    /**
     * @method BuyProduct|null getOrPut($key, $value)
     * @method BuyProduct|$this shift(int $count = 1)
     * @method BuyProduct|null firstOrFail($key = null, $operator = null, $value = null)
     * @method BuyProduct|$this pop(int $count = 1)
     * @method BuyProduct|null pull($key, $default = null)
     * @method BuyProduct|null last(callable $callback = null, $default = null)
     * @method BuyProduct|$this random($number = null)
     * @method BuyProduct|null sole($key = null, $operator = null, $value = null)
     * @method BuyProduct|null get($key, $default = null)
     * @method BuyProduct|null first(callable $callback = null, $default = null)
     * @method BuyProduct|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BuyProduct|null find($key, $default = null)
     * @method BuyProduct[] all()
     * @property-read _IH_BuyProduct_CP $keyBy
     * @property-read _IH_BuyProduct_CP $partition
     * @property-read _IH_BuyProduct_CP $max
     * @property-read _IH_BuyProduct_CP $doesntContain
     * @property-read _IH_BuyProduct_CP $flatMap
     * @property-read _IH_BuyProduct_CP $each
     * @property-read _IH_BuyProduct_CP $map
     * @property-read _IH_BuyProduct_CP $filter
     * @property-read _IH_BuyProduct_CP $unique
     * @property-read _IH_BuyProduct_CP $groupBy
     * @property-read _IH_BuyProduct_CP $sortBy
     * @property-read _IH_BuyProduct_CP $contains
     * @property-read _IH_BuyProduct_CP $sum
     * @property-read _IH_BuyProduct_CP $until
     * @property-read _IH_BuyProduct_CP $every
     * @property-read _IH_BuyProduct_CP $average
     * @property-read _IH_BuyProduct_CP $when
     * @property-read _IH_BuyProduct_CP $some
     * @property-read _IH_BuyProduct_CP $skipWhile
     * @property-read _IH_BuyProduct_CP $sortByDesc
     * @property-read _IH_BuyProduct_CP $unless
     * @property-read _IH_BuyProduct_CP $takeUntil
     * @property-read _IH_BuyProduct_CP $avg
     * @property-read _IH_BuyProduct_CP $skipUntil
     * @property-read _IH_BuyProduct_CP $first
     * @property-read _IH_BuyProduct_CP $takeWhile
     * @property-read _IH_BuyProduct_CP $min
     * @property-read _IH_BuyProduct_CP $reject
     */
    class _IH_BuyProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BuyProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BuyProduct_QB whereId($value)
     * @method _IH_BuyProduct_QB whereUserId($value)
     * @method _IH_BuyProduct_QB whereProductId($value)
     * @method _IH_BuyProduct_QB whereOrderId($value)
     * @method _IH_BuyProduct_QB whereProductQuantity($value)
     * @method _IH_BuyProduct_QB whereProductPrice($value)
     * @method _IH_BuyProduct_QB whereStatus($value)
     * @method _IH_BuyProduct_QB whereAddressId($value)
     * @method _IH_BuyProduct_QB whereCreatedAt($value)
     * @method _IH_BuyProduct_QB whereUpdatedAt($value)
     * @method BuyProduct baseSole(array|string $columns = ['*'])
     * @method BuyProduct create(array $attributes = [])
     * @method _IH_BuyProduct_C|BuyProduct[] cursor()
     * @method BuyProduct|null|_IH_BuyProduct_C|BuyProduct[] find($id, array|string $columns = ['*'])
     * @method _IH_BuyProduct_C|BuyProduct[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BuyProduct|_IH_BuyProduct_C|BuyProduct[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BuyProduct|_IH_BuyProduct_C|BuyProduct[] findOrFail($id, array|string $columns = ['*'])
     * @method BuyProduct|_IH_BuyProduct_C|BuyProduct[] findOrNew($id, array|string $columns = ['*'])
     * @method BuyProduct first(array|string $columns = ['*'])
     * @method BuyProduct firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BuyProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method BuyProduct firstOrFail(array|string $columns = ['*'])
     * @method BuyProduct firstOrNew(array $attributes = [], array $values = [])
     * @method BuyProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BuyProduct forceCreate(array $attributes)
     * @method _IH_BuyProduct_C|BuyProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BuyProduct_C|BuyProduct[] get(array|string $columns = ['*'])
     * @method BuyProduct getModel()
     * @method BuyProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_BuyProduct_C|BuyProduct[] hydrate(array $items)
     * @method BuyProduct make(array $attributes = [])
     * @method BuyProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BuyProduct[]|_IH_BuyProduct_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BuyProduct[]|_IH_BuyProduct_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BuyProduct sole(array|string $columns = ['*'])
     * @method BuyProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BuyProduct_QB extends _BaseBuilder {}
    
    /**
     * @method Cart|null getOrPut($key, $value)
     * @method Cart|$this shift(int $count = 1)
     * @method Cart|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Cart|$this pop(int $count = 1)
     * @method Cart|null pull($key, $default = null)
     * @method Cart|null last(callable $callback = null, $default = null)
     * @method Cart|$this random($number = null)
     * @method Cart|null sole($key = null, $operator = null, $value = null)
     * @method Cart|null get($key, $default = null)
     * @method Cart|null first(callable $callback = null, $default = null)
     * @method Cart|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Cart|null find($key, $default = null)
     * @method Cart[] all()
     * @property-read _IH_Cart_CP $keyBy
     * @property-read _IH_Cart_CP $partition
     * @property-read _IH_Cart_CP $max
     * @property-read _IH_Cart_CP $doesntContain
     * @property-read _IH_Cart_CP $flatMap
     * @property-read _IH_Cart_CP $each
     * @property-read _IH_Cart_CP $map
     * @property-read _IH_Cart_CP $filter
     * @property-read _IH_Cart_CP $unique
     * @property-read _IH_Cart_CP $groupBy
     * @property-read _IH_Cart_CP $sortBy
     * @property-read _IH_Cart_CP $contains
     * @property-read _IH_Cart_CP $sum
     * @property-read _IH_Cart_CP $until
     * @property-read _IH_Cart_CP $every
     * @property-read _IH_Cart_CP $average
     * @property-read _IH_Cart_CP $when
     * @property-read _IH_Cart_CP $some
     * @property-read _IH_Cart_CP $skipWhile
     * @property-read _IH_Cart_CP $sortByDesc
     * @property-read _IH_Cart_CP $unless
     * @property-read _IH_Cart_CP $takeUntil
     * @property-read _IH_Cart_CP $avg
     * @property-read _IH_Cart_CP $skipUntil
     * @property-read _IH_Cart_CP $first
     * @property-read _IH_Cart_CP $takeWhile
     * @property-read _IH_Cart_CP $min
     * @property-read _IH_Cart_CP $reject
     */
    class _IH_Cart_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Cart[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Cart_QB whereId($value)
     * @method _IH_Cart_QB whereUserId($value)
     * @method _IH_Cart_QB whereProductId($value)
     * @method _IH_Cart_QB whereFile($value)
     * @method _IH_Cart_QB whereMessage($value)
     * @method _IH_Cart_QB whereCreatedAt($value)
     * @method _IH_Cart_QB whereUpdatedAt($value)
     * @method Cart baseSole(array|string $columns = ['*'])
     * @method Cart create(array $attributes = [])
     * @method _IH_Cart_C|Cart[] cursor()
     * @method Cart|null|_IH_Cart_C|Cart[] find($id, array|string $columns = ['*'])
     * @method _IH_Cart_C|Cart[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Cart|_IH_Cart_C|Cart[] findOrFail($id, array|string $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOrNew($id, array|string $columns = ['*'])
     * @method Cart first(array|string $columns = ['*'])
     * @method Cart firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Cart firstOrCreate(array $attributes = [], array $values = [])
     * @method Cart firstOrFail(array|string $columns = ['*'])
     * @method Cart firstOrNew(array $attributes = [], array $values = [])
     * @method Cart firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Cart forceCreate(array $attributes)
     * @method _IH_Cart_C|Cart[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Cart_C|Cart[] get(array|string $columns = ['*'])
     * @method Cart getModel()
     * @method Cart[] getModels(array|string $columns = ['*'])
     * @method _IH_Cart_C|Cart[] hydrate(array $items)
     * @method Cart make(array $attributes = [])
     * @method Cart newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Cart[]|_IH_Cart_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Cart[]|_IH_Cart_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Cart sole(array|string $columns = ['*'])
     * @method Cart updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Cart_QB extends _BaseBuilder {}
    
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
     * @property-read _IH_Company_branch_CP $keyBy
     * @property-read _IH_Company_branch_CP $partition
     * @property-read _IH_Company_branch_CP $max
     * @property-read _IH_Company_branch_CP $doesntContain
     * @property-read _IH_Company_branch_CP $flatMap
     * @property-read _IH_Company_branch_CP $each
     * @property-read _IH_Company_branch_CP $map
     * @property-read _IH_Company_branch_CP $filter
     * @property-read _IH_Company_branch_CP $unique
     * @property-read _IH_Company_branch_CP $groupBy
     * @property-read _IH_Company_branch_CP $sortBy
     * @property-read _IH_Company_branch_CP $contains
     * @property-read _IH_Company_branch_CP $sum
     * @property-read _IH_Company_branch_CP $until
     * @property-read _IH_Company_branch_CP $every
     * @property-read _IH_Company_branch_CP $average
     * @property-read _IH_Company_branch_CP $when
     * @property-read _IH_Company_branch_CP $some
     * @property-read _IH_Company_branch_CP $skipWhile
     * @property-read _IH_Company_branch_CP $sortByDesc
     * @property-read _IH_Company_branch_CP $unless
     * @property-read _IH_Company_branch_CP $takeUntil
     * @property-read _IH_Company_branch_CP $avg
     * @property-read _IH_Company_branch_CP $skipUntil
     * @property-read _IH_Company_branch_CP $first
     * @property-read _IH_Company_branch_CP $takeWhile
     * @property-read _IH_Company_branch_CP $min
     * @property-read _IH_Company_branch_CP $reject
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
     * @method Email_code|null getOrPut($key, $value)
     * @method Email_code|$this shift(int $count = 1)
     * @method Email_code|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Email_code|$this pop(int $count = 1)
     * @method Email_code|null pull($key, $default = null)
     * @method Email_code|null last(callable $callback = null, $default = null)
     * @method Email_code|$this random($number = null)
     * @method Email_code|null sole($key = null, $operator = null, $value = null)
     * @method Email_code|null get($key, $default = null)
     * @method Email_code|null first(callable $callback = null, $default = null)
     * @method Email_code|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Email_code|null find($key, $default = null)
     * @method Email_code[] all()
     * @property-read _IH_Email_code_CP $keyBy
     * @property-read _IH_Email_code_CP $partition
     * @property-read _IH_Email_code_CP $max
     * @property-read _IH_Email_code_CP $doesntContain
     * @property-read _IH_Email_code_CP $flatMap
     * @property-read _IH_Email_code_CP $each
     * @property-read _IH_Email_code_CP $map
     * @property-read _IH_Email_code_CP $filter
     * @property-read _IH_Email_code_CP $unique
     * @property-read _IH_Email_code_CP $groupBy
     * @property-read _IH_Email_code_CP $sortBy
     * @property-read _IH_Email_code_CP $contains
     * @property-read _IH_Email_code_CP $sum
     * @property-read _IH_Email_code_CP $until
     * @property-read _IH_Email_code_CP $every
     * @property-read _IH_Email_code_CP $average
     * @property-read _IH_Email_code_CP $when
     * @property-read _IH_Email_code_CP $some
     * @property-read _IH_Email_code_CP $skipWhile
     * @property-read _IH_Email_code_CP $sortByDesc
     * @property-read _IH_Email_code_CP $unless
     * @property-read _IH_Email_code_CP $takeUntil
     * @property-read _IH_Email_code_CP $avg
     * @property-read _IH_Email_code_CP $skipUntil
     * @property-read _IH_Email_code_CP $first
     * @property-read _IH_Email_code_CP $takeWhile
     * @property-read _IH_Email_code_CP $min
     * @property-read _IH_Email_code_CP $reject
     */
    class _IH_Email_code_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Email_code[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Email_code_QB whereId($value)
     * @method _IH_Email_code_QB whereEmail($value)
     * @method _IH_Email_code_QB whereCode($value)
     * @method _IH_Email_code_QB whereCreatedAt($value)
     * @method _IH_Email_code_QB whereUpdatedAt($value)
     * @method Email_code baseSole(array|string $columns = ['*'])
     * @method Email_code create(array $attributes = [])
     * @method _IH_Email_code_C|Email_code[] cursor()
     * @method Email_code|null|_IH_Email_code_C|Email_code[] find($id, array|string $columns = ['*'])
     * @method _IH_Email_code_C|Email_code[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Email_code|_IH_Email_code_C|Email_code[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Email_code|_IH_Email_code_C|Email_code[] findOrFail($id, array|string $columns = ['*'])
     * @method Email_code|_IH_Email_code_C|Email_code[] findOrNew($id, array|string $columns = ['*'])
     * @method Email_code first(array|string $columns = ['*'])
     * @method Email_code firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Email_code firstOrCreate(array $attributes = [], array $values = [])
     * @method Email_code firstOrFail(array|string $columns = ['*'])
     * @method Email_code firstOrNew(array $attributes = [], array $values = [])
     * @method Email_code firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Email_code forceCreate(array $attributes)
     * @method _IH_Email_code_C|Email_code[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Email_code_C|Email_code[] get(array|string $columns = ['*'])
     * @method Email_code getModel()
     * @method Email_code[] getModels(array|string $columns = ['*'])
     * @method _IH_Email_code_C|Email_code[] hydrate(array $items)
     * @method Email_code make(array $attributes = [])
     * @method Email_code newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Email_code[]|_IH_Email_code_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Email_code[]|_IH_Email_code_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Email_code sole(array|string $columns = ['*'])
     * @method Email_code updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Email_code_QB extends _BaseBuilder {}
    
    /**
     * @method Favorite|null getOrPut($key, $value)
     * @method Favorite|$this shift(int $count = 1)
     * @method Favorite|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Favorite|$this pop(int $count = 1)
     * @method Favorite|null pull($key, $default = null)
     * @method Favorite|null last(callable $callback = null, $default = null)
     * @method Favorite|$this random($number = null)
     * @method Favorite|null sole($key = null, $operator = null, $value = null)
     * @method Favorite|null get($key, $default = null)
     * @method Favorite|null first(callable $callback = null, $default = null)
     * @method Favorite|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Favorite|null find($key, $default = null)
     * @method Favorite[] all()
     * @property-read _IH_Favorite_CP $keyBy
     * @property-read _IH_Favorite_CP $partition
     * @property-read _IH_Favorite_CP $max
     * @property-read _IH_Favorite_CP $doesntContain
     * @property-read _IH_Favorite_CP $flatMap
     * @property-read _IH_Favorite_CP $each
     * @property-read _IH_Favorite_CP $map
     * @property-read _IH_Favorite_CP $filter
     * @property-read _IH_Favorite_CP $unique
     * @property-read _IH_Favorite_CP $groupBy
     * @property-read _IH_Favorite_CP $sortBy
     * @property-read _IH_Favorite_CP $contains
     * @property-read _IH_Favorite_CP $sum
     * @property-read _IH_Favorite_CP $until
     * @property-read _IH_Favorite_CP $every
     * @property-read _IH_Favorite_CP $average
     * @property-read _IH_Favorite_CP $when
     * @property-read _IH_Favorite_CP $some
     * @property-read _IH_Favorite_CP $skipWhile
     * @property-read _IH_Favorite_CP $sortByDesc
     * @property-read _IH_Favorite_CP $unless
     * @property-read _IH_Favorite_CP $takeUntil
     * @property-read _IH_Favorite_CP $avg
     * @property-read _IH_Favorite_CP $skipUntil
     * @property-read _IH_Favorite_CP $first
     * @property-read _IH_Favorite_CP $takeWhile
     * @property-read _IH_Favorite_CP $min
     * @property-read _IH_Favorite_CP $reject
     */
    class _IH_Favorite_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Favorite[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Favorite_QB whereId($value)
     * @method _IH_Favorite_QB whereUserId($value)
     * @method _IH_Favorite_QB whereProductId($value)
     * @method _IH_Favorite_QB whereCreatedAt($value)
     * @method _IH_Favorite_QB whereUpdatedAt($value)
     * @method Favorite baseSole(array|string $columns = ['*'])
     * @method Favorite create(array $attributes = [])
     * @method _IH_Favorite_C|Favorite[] cursor()
     * @method Favorite|null|_IH_Favorite_C|Favorite[] find($id, array|string $columns = ['*'])
     * @method _IH_Favorite_C|Favorite[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Favorite|_IH_Favorite_C|Favorite[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Favorite|_IH_Favorite_C|Favorite[] findOrFail($id, array|string $columns = ['*'])
     * @method Favorite|_IH_Favorite_C|Favorite[] findOrNew($id, array|string $columns = ['*'])
     * @method Favorite first(array|string $columns = ['*'])
     * @method Favorite firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Favorite firstOrCreate(array $attributes = [], array $values = [])
     * @method Favorite firstOrFail(array|string $columns = ['*'])
     * @method Favorite firstOrNew(array $attributes = [], array $values = [])
     * @method Favorite firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Favorite forceCreate(array $attributes)
     * @method _IH_Favorite_C|Favorite[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Favorite_C|Favorite[] get(array|string $columns = ['*'])
     * @method Favorite getModel()
     * @method Favorite[] getModels(array|string $columns = ['*'])
     * @method _IH_Favorite_C|Favorite[] hydrate(array $items)
     * @method Favorite make(array $attributes = [])
     * @method Favorite newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Favorite[]|_IH_Favorite_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Favorite[]|_IH_Favorite_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Favorite sole(array|string $columns = ['*'])
     * @method Favorite updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Favorite_QB extends _BaseBuilder {}
    
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
     * @property-read _IH_Notification_CP $keyBy
     * @property-read _IH_Notification_CP $partition
     * @property-read _IH_Notification_CP $max
     * @property-read _IH_Notification_CP $doesntContain
     * @property-read _IH_Notification_CP $flatMap
     * @property-read _IH_Notification_CP $each
     * @property-read _IH_Notification_CP $map
     * @property-read _IH_Notification_CP $filter
     * @property-read _IH_Notification_CP $unique
     * @property-read _IH_Notification_CP $groupBy
     * @property-read _IH_Notification_CP $sortBy
     * @property-read _IH_Notification_CP $contains
     * @property-read _IH_Notification_CP $sum
     * @property-read _IH_Notification_CP $until
     * @property-read _IH_Notification_CP $every
     * @property-read _IH_Notification_CP $average
     * @property-read _IH_Notification_CP $when
     * @property-read _IH_Notification_CP $some
     * @property-read _IH_Notification_CP $skipWhile
     * @property-read _IH_Notification_CP $sortByDesc
     * @property-read _IH_Notification_CP $unless
     * @property-read _IH_Notification_CP $takeUntil
     * @property-read _IH_Notification_CP $avg
     * @property-read _IH_Notification_CP $skipUntil
     * @property-read _IH_Notification_CP $first
     * @property-read _IH_Notification_CP $takeWhile
     * @property-read _IH_Notification_CP $min
     * @property-read _IH_Notification_CP $reject
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
     * @method OrderStatus|null getOrPut($key, $value)
     * @method OrderStatus|$this shift(int $count = 1)
     * @method OrderStatus|null firstOrFail($key = null, $operator = null, $value = null)
     * @method OrderStatus|$this pop(int $count = 1)
     * @method OrderStatus|null pull($key, $default = null)
     * @method OrderStatus|null last(callable $callback = null, $default = null)
     * @method OrderStatus|$this random($number = null)
     * @method OrderStatus|null sole($key = null, $operator = null, $value = null)
     * @method OrderStatus|null get($key, $default = null)
     * @method OrderStatus|null first(callable $callback = null, $default = null)
     * @method OrderStatus|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderStatus|null find($key, $default = null)
     * @method OrderStatus[] all()
     * @property-read _IH_OrderStatus_CP $keyBy
     * @property-read _IH_OrderStatus_CP $partition
     * @property-read _IH_OrderStatus_CP $max
     * @property-read _IH_OrderStatus_CP $doesntContain
     * @property-read _IH_OrderStatus_CP $flatMap
     * @property-read _IH_OrderStatus_CP $each
     * @property-read _IH_OrderStatus_CP $map
     * @property-read _IH_OrderStatus_CP $filter
     * @property-read _IH_OrderStatus_CP $unique
     * @property-read _IH_OrderStatus_CP $groupBy
     * @property-read _IH_OrderStatus_CP $sortBy
     * @property-read _IH_OrderStatus_CP $contains
     * @property-read _IH_OrderStatus_CP $sum
     * @property-read _IH_OrderStatus_CP $until
     * @property-read _IH_OrderStatus_CP $every
     * @property-read _IH_OrderStatus_CP $average
     * @property-read _IH_OrderStatus_CP $when
     * @property-read _IH_OrderStatus_CP $some
     * @property-read _IH_OrderStatus_CP $skipWhile
     * @property-read _IH_OrderStatus_CP $sortByDesc
     * @property-read _IH_OrderStatus_CP $unless
     * @property-read _IH_OrderStatus_CP $takeUntil
     * @property-read _IH_OrderStatus_CP $avg
     * @property-read _IH_OrderStatus_CP $skipUntil
     * @property-read _IH_OrderStatus_CP $first
     * @property-read _IH_OrderStatus_CP $takeWhile
     * @property-read _IH_OrderStatus_CP $min
     * @property-read _IH_OrderStatus_CP $reject
     */
    class _IH_OrderStatus_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderStatus[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_OrderStatus_QB whereId($value)
     * @method _IH_OrderStatus_QB whereCreatedAt($value)
     * @method _IH_OrderStatus_QB whereUpdatedAt($value)
     * @method OrderStatus baseSole(array|string $columns = ['*'])
     * @method OrderStatus create(array $attributes = [])
     * @method _IH_OrderStatus_C|OrderStatus[] cursor()
     * @method OrderStatus|null|_IH_OrderStatus_C|OrderStatus[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderStatus_C|OrderStatus[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderStatus|_IH_OrderStatus_C|OrderStatus[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderStatus|_IH_OrderStatus_C|OrderStatus[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderStatus|_IH_OrderStatus_C|OrderStatus[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderStatus first(array|string $columns = ['*'])
     * @method OrderStatus firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderStatus firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderStatus firstOrFail(array|string $columns = ['*'])
     * @method OrderStatus firstOrNew(array $attributes = [], array $values = [])
     * @method OrderStatus firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderStatus forceCreate(array $attributes)
     * @method _IH_OrderStatus_C|OrderStatus[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderStatus_C|OrderStatus[] get(array|string $columns = ['*'])
     * @method OrderStatus getModel()
     * @method OrderStatus[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderStatus_C|OrderStatus[] hydrate(array $items)
     * @method OrderStatus make(array $attributes = [])
     * @method OrderStatus newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderStatus[]|_IH_OrderStatus_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderStatus[]|_IH_OrderStatus_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderStatus sole(array|string $columns = ['*'])
     * @method OrderStatus updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderStatus_QB extends _BaseBuilder {}
    
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
     * @property-read _IH_Product_CP $keyBy
     * @property-read _IH_Product_CP $partition
     * @property-read _IH_Product_CP $max
     * @property-read _IH_Product_CP $doesntContain
     * @property-read _IH_Product_CP $flatMap
     * @property-read _IH_Product_CP $each
     * @property-read _IH_Product_CP $map
     * @property-read _IH_Product_CP $filter
     * @property-read _IH_Product_CP $unique
     * @property-read _IH_Product_CP $groupBy
     * @property-read _IH_Product_CP $sortBy
     * @property-read _IH_Product_CP $contains
     * @property-read _IH_Product_CP $sum
     * @property-read _IH_Product_CP $until
     * @property-read _IH_Product_CP $every
     * @property-read _IH_Product_CP $average
     * @property-read _IH_Product_CP $when
     * @property-read _IH_Product_CP $some
     * @property-read _IH_Product_CP $skipWhile
     * @property-read _IH_Product_CP $sortByDesc
     * @property-read _IH_Product_CP $unless
     * @property-read _IH_Product_CP $takeUntil
     * @property-read _IH_Product_CP $avg
     * @property-read _IH_Product_CP $skipUntil
     * @property-read _IH_Product_CP $first
     * @property-read _IH_Product_CP $takeWhile
     * @property-read _IH_Product_CP $min
     * @property-read _IH_Product_CP $reject
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
     * @method _IH_Product_QB whereIsOffer($value)
     * @method _IH_Product_QB whereProductDesc($value)
     * @method _IH_Product_QB whereProductQuantityPrice($value)
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
     * @property-read _IH_Product_branch_CP $keyBy
     * @property-read _IH_Product_branch_CP $partition
     * @property-read _IH_Product_branch_CP $max
     * @property-read _IH_Product_branch_CP $doesntContain
     * @property-read _IH_Product_branch_CP $flatMap
     * @property-read _IH_Product_branch_CP $each
     * @property-read _IH_Product_branch_CP $map
     * @property-read _IH_Product_branch_CP $filter
     * @property-read _IH_Product_branch_CP $unique
     * @property-read _IH_Product_branch_CP $groupBy
     * @property-read _IH_Product_branch_CP $sortBy
     * @property-read _IH_Product_branch_CP $contains
     * @property-read _IH_Product_branch_CP $sum
     * @property-read _IH_Product_branch_CP $until
     * @property-read _IH_Product_branch_CP $every
     * @property-read _IH_Product_branch_CP $average
     * @property-read _IH_Product_branch_CP $when
     * @property-read _IH_Product_branch_CP $some
     * @property-read _IH_Product_branch_CP $skipWhile
     * @property-read _IH_Product_branch_CP $sortByDesc
     * @property-read _IH_Product_branch_CP $unless
     * @property-read _IH_Product_branch_CP $takeUntil
     * @property-read _IH_Product_branch_CP $avg
     * @property-read _IH_Product_branch_CP $skipUntil
     * @property-read _IH_Product_branch_CP $first
     * @property-read _IH_Product_branch_CP $takeWhile
     * @property-read _IH_Product_branch_CP $min
     * @property-read _IH_Product_branch_CP $reject
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
     * @method _IH_Product_branch_QB whereProductBranchDesc($value)
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
     * @property-read _IH_Role_CP $keyBy
     * @property-read _IH_Role_CP $partition
     * @property-read _IH_Role_CP $max
     * @property-read _IH_Role_CP $doesntContain
     * @property-read _IH_Role_CP $flatMap
     * @property-read _IH_Role_CP $each
     * @property-read _IH_Role_CP $map
     * @property-read _IH_Role_CP $filter
     * @property-read _IH_Role_CP $unique
     * @property-read _IH_Role_CP $groupBy
     * @property-read _IH_Role_CP $sortBy
     * @property-read _IH_Role_CP $contains
     * @property-read _IH_Role_CP $sum
     * @property-read _IH_Role_CP $until
     * @property-read _IH_Role_CP $every
     * @property-read _IH_Role_CP $average
     * @property-read _IH_Role_CP $when
     * @property-read _IH_Role_CP $some
     * @property-read _IH_Role_CP $skipWhile
     * @property-read _IH_Role_CP $sortByDesc
     * @property-read _IH_Role_CP $unless
     * @property-read _IH_Role_CP $takeUntil
     * @property-read _IH_Role_CP $avg
     * @property-read _IH_Role_CP $skipUntil
     * @property-read _IH_Role_CP $first
     * @property-read _IH_Role_CP $takeWhile
     * @property-read _IH_Role_CP $min
     * @property-read _IH_Role_CP $reject
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
     * @property-read _IH_Service_CP $keyBy
     * @property-read _IH_Service_CP $partition
     * @property-read _IH_Service_CP $max
     * @property-read _IH_Service_CP $doesntContain
     * @property-read _IH_Service_CP $flatMap
     * @property-read _IH_Service_CP $each
     * @property-read _IH_Service_CP $map
     * @property-read _IH_Service_CP $filter
     * @property-read _IH_Service_CP $unique
     * @property-read _IH_Service_CP $groupBy
     * @property-read _IH_Service_CP $sortBy
     * @property-read _IH_Service_CP $contains
     * @property-read _IH_Service_CP $sum
     * @property-read _IH_Service_CP $until
     * @property-read _IH_Service_CP $every
     * @property-read _IH_Service_CP $average
     * @property-read _IH_Service_CP $when
     * @property-read _IH_Service_CP $some
     * @property-read _IH_Service_CP $skipWhile
     * @property-read _IH_Service_CP $sortByDesc
     * @property-read _IH_Service_CP $unless
     * @property-read _IH_Service_CP $takeUntil
     * @property-read _IH_Service_CP $avg
     * @property-read _IH_Service_CP $skipUntil
     * @property-read _IH_Service_CP $first
     * @property-read _IH_Service_CP $takeWhile
     * @property-read _IH_Service_CP $min
     * @property-read _IH_Service_CP $reject
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
     * @method _IH_Service_QB whereIsOffer($value)
     * @method _IH_Service_QB whereMainImg($value)
     * @method _IH_Service_QB whereServiceFirstDesc($value)
     * @method _IH_Service_QB whereServiceSecondDesc($value)
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
     * @property-read _IH_Service_branch_CP $keyBy
     * @property-read _IH_Service_branch_CP $partition
     * @property-read _IH_Service_branch_CP $max
     * @property-read _IH_Service_branch_CP $doesntContain
     * @property-read _IH_Service_branch_CP $flatMap
     * @property-read _IH_Service_branch_CP $each
     * @property-read _IH_Service_branch_CP $map
     * @property-read _IH_Service_branch_CP $filter
     * @property-read _IH_Service_branch_CP $unique
     * @property-read _IH_Service_branch_CP $groupBy
     * @property-read _IH_Service_branch_CP $sortBy
     * @property-read _IH_Service_branch_CP $contains
     * @property-read _IH_Service_branch_CP $sum
     * @property-read _IH_Service_branch_CP $until
     * @property-read _IH_Service_branch_CP $every
     * @property-read _IH_Service_branch_CP $average
     * @property-read _IH_Service_branch_CP $when
     * @property-read _IH_Service_branch_CP $some
     * @property-read _IH_Service_branch_CP $skipWhile
     * @property-read _IH_Service_branch_CP $sortByDesc
     * @property-read _IH_Service_branch_CP $unless
     * @property-read _IH_Service_branch_CP $takeUntil
     * @property-read _IH_Service_branch_CP $avg
     * @property-read _IH_Service_branch_CP $skipUntil
     * @property-read _IH_Service_branch_CP $first
     * @property-read _IH_Service_branch_CP $takeWhile
     * @property-read _IH_Service_branch_CP $min
     * @property-read _IH_Service_branch_CP $reject
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
     * @property-read _IH_User_CP $keyBy
     * @property-read _IH_User_CP $partition
     * @property-read _IH_User_CP $max
     * @property-read _IH_User_CP $doesntContain
     * @property-read _IH_User_CP $flatMap
     * @property-read _IH_User_CP $each
     * @property-read _IH_User_CP $map
     * @property-read _IH_User_CP $filter
     * @property-read _IH_User_CP $unique
     * @property-read _IH_User_CP $groupBy
     * @property-read _IH_User_CP $sortBy
     * @property-read _IH_User_CP $contains
     * @property-read _IH_User_CP $sum
     * @property-read _IH_User_CP $until
     * @property-read _IH_User_CP $every
     * @property-read _IH_User_CP $average
     * @property-read _IH_User_CP $when
     * @property-read _IH_User_CP $some
     * @property-read _IH_User_CP $skipWhile
     * @property-read _IH_User_CP $sortByDesc
     * @property-read _IH_User_CP $unless
     * @property-read _IH_User_CP $takeUntil
     * @property-read _IH_User_CP $avg
     * @property-read _IH_User_CP $skipUntil
     * @property-read _IH_User_CP $first
     * @property-read _IH_User_CP $takeWhile
     * @property-read _IH_User_CP $min
     * @property-read _IH_User_CP $reject
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
     * @method _IH_User_QB whereRoleId($value)
     * @method _IH_User_QB whereCompanyBranchId($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB wherePhonekey($value)
     * @method _IH_User_QB wherePhone($value)
     * @method _IH_User_QB whereFullphone($value)
     * @method _IH_User_QB whereImg($value)
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
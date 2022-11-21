<?php //674ee2ce736c6ed24ade7783123adb02
/** @noinspection all */

namespace Illuminate\Notifications {

    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_CP;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method DatabaseNotification|null getOrPut($key, $value)
     * @method DatabaseNotification|$this shift(int $count = 1)
     * @method DatabaseNotification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DatabaseNotification|$this pop(int $count = 1)
     * @method DatabaseNotification|null pull($key, \Closure $default = null)
     * @method DatabaseNotification|null last(callable $callback = null, \Closure $default = null)
     * @method DatabaseNotification|$this random(callable|int|null $number = null)
     * @method DatabaseNotification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DatabaseNotification|null get($key, \Closure $default = null)
     * @method DatabaseNotification|null first(callable $callback = null, \Closure $default = null)
     * @method DatabaseNotification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DatabaseNotification|null find($key, $default = null)
     * @method DatabaseNotification[] all()
     * @property-read _IH_DatabaseNotification_CP $when
     * @property-read _IH_DatabaseNotification_CP $average
     * @property-read _IH_DatabaseNotification_CP $skipUntil
     * @property-read _IH_DatabaseNotification_CP $sum
     * @property-read _IH_DatabaseNotification_CP $max
     * @property-read _IH_DatabaseNotification_CP $contains
     * @property-read _IH_DatabaseNotification_CP $takeUntil
     * @property-read _IH_DatabaseNotification_CP $unless
     * @property-read _IH_DatabaseNotification_CP $first
     * @property-read _IH_DatabaseNotification_CP $takeWhile
     * @property-read _IH_DatabaseNotification_CP $doesntContain
     * @property-read _IH_DatabaseNotification_CP $reject
     * @property-read _IH_DatabaseNotification_CP $sortByDesc
     * @property-read _IH_DatabaseNotification_CP $flatMap
     * @property-read _IH_DatabaseNotification_CP $keyBy
     * @property-read _IH_DatabaseNotification_CP $each
     * @property-read _IH_DatabaseNotification_CP $avg
     * @property-read _IH_DatabaseNotification_CP $until
     * @property-read _IH_DatabaseNotification_CP $unique
     * @property-read _IH_DatabaseNotification_CP $min
     * @property-read _IH_DatabaseNotification_CP $sortBy
     * @property-read _IH_DatabaseNotification_CP $skipWhile
     * @property-read _IH_DatabaseNotification_CP $every
     * @property-read _IH_DatabaseNotification_CP $partition
     * @property-read _IH_DatabaseNotification_CP $map
     * @property-read _IH_DatabaseNotification_CP $groupBy
     * @property-read _IH_DatabaseNotification_CP $some
     * @property-read _IH_DatabaseNotification_CP $filter
     */
    class DatabaseNotificationCollection extends _BaseCollection {
        /**
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
}
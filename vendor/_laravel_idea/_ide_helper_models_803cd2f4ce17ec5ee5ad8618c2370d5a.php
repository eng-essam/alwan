<?php //b269310498bed5ee61065212f1e677ad
/** @noinspection all */

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $notification_text
     * @property string|null $notification_img
     * @property bool $read_notification
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _IH_DatabaseNotification_QB onWriteConnection()
     * @method _IH_DatabaseNotification_QB newQuery()
     * @method static _IH_DatabaseNotification_QB on(null|string $connection = null)
     * @method static _IH_DatabaseNotification_QB query()
     * @method static _IH_DatabaseNotification_QB with(array|string $relations)
     * @method _IH_DatabaseNotification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static DatabaseNotificationCollection|DatabaseNotification[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_DatabaseNotification_QB
     */
    class DatabaseNotification extends Model {}
}
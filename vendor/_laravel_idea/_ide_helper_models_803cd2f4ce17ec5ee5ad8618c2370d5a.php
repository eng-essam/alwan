<?php //ef6027ae177492ee891b0ad47859674c
/** @noinspection all */

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $notification_text
     * @property string $notification_img
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
     * @method static _IH_DatabaseNotification_C|DatabaseNotification[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_DatabaseNotification_QB
     */
    class DatabaseNotification extends Model {}
}
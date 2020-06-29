<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppleNotifications extends Model
{
    public static function storeNotification(string $notificationType)
    {

        return self::create(
            [
                'type' => $notificationType,
            ]
        );
    }
}

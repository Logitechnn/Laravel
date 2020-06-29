<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    const INITIAL_BUY = 'initial_buy';
    const CANCEL = 'cancel';
    const RENEWAL = 'renewal';
}

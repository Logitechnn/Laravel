<?php

namespace App\Http\Controllers;

use App\AppleNotifications;
use App\NotificationType;

use Illuminate\Http\Request;

class webHookController extends Controller
{
    public function __invoke(Request $request)
    {
        $jobConfigKey = NotificationType::{$request->input('notification_type')}();

        AppleNotifications::storeNotification($jobConfigKey);

        return response()->json();
    }
}

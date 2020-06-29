<?php

return [
    /*
    * Apple will send the shared secret with the request that should match
    */
    'shared_secret' => env('APPLE_SHARED_SECRET'),

    /*
    * All the events that will be handeled by AppStore application.
    */
    'jobs' => [
        'initial_buy' => \App\Jobs\AppstoreNotificationsBuy::class,
        'cancel' => \App\Jobs\AppstoreNotificationsCancel::class,
        'renewal' => \App\Jobs\AppstoreNotificationsRenewal::class,
    ],
];

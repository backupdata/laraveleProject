<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '1754098244864961',
        'client_secret' => 'a49463376ae711eff5e374c7a8ac217c',
        'redirect' => 'http://localhost/blog/auth/callback',
    ],

    'google' => [
    'client_id' => '304885632789-j1s4dv2b5h0m1hgoebhbv10d43lko588.apps.googleusercontent.com',
    'client_secret' => 'SXmdcU_WFA7b0ntLnUJ6aTPl',
    'redirect' => 'http://localhost/blog/auth/gcallback',
],

'twitter' => [
    'client_id' => '3suijuXMpvyKALdFlVMPpae4B',
    'client_secret' => 'yPRdGfMFHMLSmYlXrkufivHPCCmVtgCkS1QFGZIz3MXM8266P5',
    'redirect' => 'http://localhost/blog/auth/Tcallback',
],
];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
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
    'client_id' => '347141798986749',
    'client_secret' => '1083174ba3c0a04301e5152304fa35ef',
    'redirect' => 'http://localhost/MainPro/auth/callback',
],

  'google' => [
    'client_id' => '52747882205-9rosmtir04snh4fjfcj57417k395btjc.apps.googleusercontent.com',
    'client_secret' => 'k1xUm097YxyODBNjlleeaZ43',
    'redirect' => 'http://localhost/MainPro/auth/gcallback',
],

'twitter' => [
    'client_id' => 'sgXuXMxDrGrgn3Da1ViAwg6jF',
    'client_secret' => '0QTBnwvrLf6e7oT9qvmnGqtCdIeKqKYUj5Xiw8ixM4odamFh88',
    'redirect' => 'http://localhost/MainPro/auth/Tcallback',
],

];

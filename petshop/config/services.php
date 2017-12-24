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
        'client_id' => '1651908864867131',
        'client_secret' => 'a2abb4b23c689f88a2e59d2a17767425',
        'redirect' => 'http://webshop.test/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '940315568191-v29qdfa79e6t87uapk8ja5vq43fb3h4c.apps.googleusercontent.com',
        'client_secret' => 'TRabcwcNEgfef7zwZPaXKqO_',
        'redirect' => 'http://webshop.test/login/google/callback',
    ],
];

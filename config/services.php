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
        'region' => env('SES_REGION', 'us-east-1'),
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
            'client_id'     => env('FACEBOOK_CLIENT_ID'),
            'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
            'redirect'      => env('FACEBOOK_URL'),
        ],
    'twitter' => [
            'client_id'     => 'WIOElxB0BOqXiiR0TwDkdS3t3',
            'client_secret' => 'sd7rQaqHzmHkuSWyDpovSyMn7bPl5YHD4LFuOuPOLnw11lPS0k',
            'redirect'      => 'http://127.0.0.1:8000/login/twitter/callback',
        ],
    /* 'google' => [
            'client_id'     => env('GOOGLE_CLIENT_ID'),
            'client_secret' => env('GOOGLE_CLIENT_SECRET'),
            'redirect'      => env('GOOGLE_URL'),
        ],*/

    'google' => [
            'client_id'     => '861209555612-smn7rlh91356kmr9ldbqa7kpbgl1or3q.apps.googleusercontent.com',
            'client_secret' => 'cqX_8UVFj15qKTgjs9s6w4bR',
            'redirect'      => 'http://localhost:8000/login/google/callback',
        ],

];

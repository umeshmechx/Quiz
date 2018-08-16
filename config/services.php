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
    'client_id' => '227340851423105',        //env('GITHUB_CLIENT_ID'),         // Your GitHub Client ID
    'client_secret' => '4495fa9c8fa3a4569fa942d1d0f6fa28', //env('GITHUB_CLIENT_SECRET'), // Your GitHub Client Secret
    'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
    ],

    'google' => [
    'client_id' => '375334098430-mciv8uavkpgv5v8mjbiroj6om7g7l83n.apps.googleusercontent.com',       
    'client_secret' => 'Cp8coByS8KTx8kI294cf1V6a', 
    'redirect' => 'http://127.0.0.1:8000/login/google/callback',
    ],

];

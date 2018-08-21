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

    'client_id' => '41399003601-aplsltjqdhbe2d7tr4qd4bb5ohe6acjs.apps.googleusercontent.com',       
    'client_secret' => 'gZW3gDHjJy3hWDmcfdIOkp1k', 
    'redirect' => 'https://www.fortune-quiz.in/login/google/callback',//'http://127.0.0.1:8000/login/google/callback',
    ],

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'api_keys' => [
        'mp_public_key' => env('MERCADOPAGO_PUBLIC_API_KEY'),
        'mp_secret_key' => env('MERCADOPAGO_SECRET_API_KEY'),
        'cq_public_key' => env('CULQI_PUBLIC_API_KEY'),
        'cq_secret_key' => env('CULQI_SECRET_API_KEY'),
        'gl_api_key' => env('GOOGLE_API_KEY'),
    ],
];

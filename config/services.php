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
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID', '387135a00ebed3dd652b'),
        'client_secret' => env('GITHUB_CLIENT_SECRET', '762c991cf7a39dbc340e22b2cebc9d9fed435d7c'),
        'redirect' => env('SOCIALITE_REDIRECT', "https://localhost/public/social-auth/github/callback"),
    ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID', "860115135113-5pl0fa2ejgpvp81iau8ubdd472ar5qr7.apps.googleusercontent.com"),
        'client_secret' => env('GOOGLE_CLIENT_SECRET', "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"),
        'redirect' => env('SOCIALITE_REDIRECT', "https://localhost/social-auth/google/callback"),
    ],
    'gitlab' => [
        'client_id' => env('GITLAB_CLIENT_ID'),
        'client_secret' => env('GITLAB_CLIENT_SECRET'),
        'redirect' => env('SOCIALITE_REDIRECT', "http://127.0.0.1:8000/auth/socialite/callback"),
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID','567879215159644'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET','be1c5bd883e2034d9c598e1d24e3a79e'),
        'redirect' => env('SOCIALITE_REDIRECT', "https://localhost/social-auth/facebook/callback"),
        'active' => env('1', '0'),
    ],

];

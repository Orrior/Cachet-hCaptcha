<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Captcha Key and Secret
    |--------------------------------------------------------------------------
    | This option is used to provide captcha secret and key to controller,
    | so we could call captcha validation in it.
    |
    */

    'credentials' => [
        'key' => env('HCAPTCHA_SITEKEY'),
        'secret' => env('HCAPTCHA_SECRET'),
    ],
];

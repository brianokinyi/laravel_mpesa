<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Account
    |--------------------------------------------------------------------------
    |
    | This is the default account to be used when none is specified.
    */

    'default' => 'paybill_1',

    /*
    |--------------------------------------------------------------------------
    | Accounts
    |--------------------------------------------------------------------------
    |
    | These are the accounts that can be used with the package. You can configure
    | as many as needed. Two have been setup for you.
    |
    | Sandbox: Determines whether to use the sandbox, Possible values: sandbox | production
    | Initiator: This is the username used to authenticate the transaction request
    | LNMO:
    |    paybill: Your paybill number
    |    shortcode: Your business shortcode
    |    passkey: The passkey for the paybill number
    |    callback: Endpoint that will be be queried on completion or failure of the transaction.
    |
    */
    'accounts' => [
        'paybill_1' => [
            'sandbox' => true,
            'key'   => 'ZtkRW6ATbVtFpNml5w5SfG26Adfyagn9',
            'secret' => 'dosFI1yQ8bvHEVFw',
            'initiator' => 'test1pi13',
            'password' => 'djdj',
            'b2c_timeout' => 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws',
            'b2c_result' => 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws',
            'id_validation_callback' => 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws',
            'lnmo' => [
                'paybill' => 600990,
                'shortcode' => 174379,
                'passkey' => 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',
                'callback' => 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws',
            ]
        ],
    ]
];

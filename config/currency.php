<?php

return [
    'default'            => env('CURRENCY_DEFAULT', 'IN'),
    'default_swift_code' => env('CURRENCY_DEFAULT_SWIFT_CODE', 'INR'),
    'IN' => [
        'swift_code' => 'INR',
        'symbol'     => '₹',
    ],
    'MY' => [
        'swift_code' => 'MYR',
        'symbol'     => 'RM',
    ],
    'US' => [
        'swift_code' => 'USD',
        'symbol'     => '$',
    ],
];

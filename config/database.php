<?php

return [
    'connections' => [
        'wordpress' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'database' => env('DB_NAME', 'forge'),
            'username' => env('DB_USER', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => env('DB_PREFIX', 'wp_'),
            'strict' => false,
            'engine' => null,
        ],
    ],
];

<?php

use Monolog\Handler\StreamHandler;
use Monolog\Handler\NullHandler;

return [
    'default' => env('LOG_CHANNEL', 'stderr'),

    'channels' => [
        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],
    ],
];

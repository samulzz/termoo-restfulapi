<?php

return [
    'paths' => ['api/*', 'jogos', 'jogos/*'],
    'allowed_methods' => ['POST', 'OPTIONS'],
    'allowed_origins' => ['https://termorest.conradosal.com'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];

<?php

return [
    'name' => env('APP_NAME', 'Termoo API'),
    'env' => env('APP_ENV', 'production'),
    'debug' => (bool) env('APP_DEBUG', false),
    'url' => env('APP_URL', 'http://localhost'),
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',
    'timezone' => 'America/Sao_Paulo',
    'locale' => 'pt_BR',
    'fallback_locale' => 'pt_BR',
    'faker_locale' => 'pt_BR',
];

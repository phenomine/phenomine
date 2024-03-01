<?php

return [
    'driver' => env('DB_DRIVER', 'mysql'),
    'host' => env('DB_HOST', 'localhost'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', ''),
    'username' => env('DB_USERNAME', 'root'),
    'password' => env('DB_PASSWORD', ''),
    'socket' => '',
    'options' => [
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'table_prefix' => '',
    ],
    'migration_table' => 'db_migrations'
];

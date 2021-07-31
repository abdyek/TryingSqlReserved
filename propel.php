<?php

require 'vendor/autoload.php';

use TryingSqlReserved\Config;

return [
    'propel' => [
        'database' => [
            'connections' => [
                Config::DBNAME => [
                    'adapter'    => 'mysql',
                    'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
                    'dsn'        => 'mysql:host=127.0.0.1;dbname='.Config::DBNAME,
                    'user'       => 'root',
                    'password'   => '',
                    'attributes' => [],
                    'settings'   => [
                        'charset'=> 'utf8mb4',
                        'queries'=> [
                            'utf8' => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci, COLLATION_CONNECTION = utf8mb4_unicode_ci, COLLATION_DATABASE = utf8mb4_unicode_ci, COLLATION_SERVER = utf8mb4_unicode_ci'
                        ]
                    ]
                ]
            ]
        ],
        'runtime' => [
            'defaultConnection' => Config::DBNAME,
            'connections' => [Config::DBNAME]
        ],
        'generator' => [
            'defaultConnection' => Config::DBNAME,
            'connections' => [Config::DBNAME]
        ]
    ]
];

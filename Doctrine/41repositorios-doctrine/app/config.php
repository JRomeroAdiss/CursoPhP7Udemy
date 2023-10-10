<?php

return [
    \Application\Services\Doctrine::class => \DI\create(\Application\Services\Doctrine::class)
        ->constructor(\DI\get('db.connectionOptions')),
    'db.connectionOptions' => [
        "driver"        =>      "pdo_mysql",
        "host"          =>      "127.0.0.1",
        "user"          =>      "root",
        "password"      =>      "root",
        "port"          =>      3306,
        "dbname"        =>      "doctrinedb",
    ]
];
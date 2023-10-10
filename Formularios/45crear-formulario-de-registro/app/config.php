<?php
use Application\Services\Doctrine;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Doctrine::class=>\DI\create(Doctrine::class)
        ->constructor(\DI\get('db.connectionOptions')),

    \Twig\Environment::class => function(){
        $loader = new FilesystemLoader(__DIR__ . "/../src/Application/Views");
        return new Environment($loader);
    },
    'db.connectionOptions' => [
        "driver"        =>      "pdo_mysql",
        "host"          =>      "127.0.0.1",
        "user"          =>      "root",
        "password"      =>      "root",
        "port"          =>      3306,
        "dbname"        =>      "doctrinedb",
    ]
];
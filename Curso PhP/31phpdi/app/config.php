<?php

use Blog\Interfaces\IArticle;
use Blog\Persistences\InMemoryArticle;
use function DI\create;

return [
    IArticle::class => create(InMemoryArticle::class),
    \Twig\Environment::class => function () {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . "/../src/Blog/Views");
        return new \Twig\Environment($loader);
    }
];
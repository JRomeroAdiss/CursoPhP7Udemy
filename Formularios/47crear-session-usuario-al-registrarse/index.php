<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

define('BASE_URL', 'http://localhost:5000');

use FastRoute\RouteCollector;

$container = require __DIR__ . "/app/bootstrap.php";


$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r)
{
    $r->addRoute("GET", "/dashboard", ['Application\Controllers\DashboardController', 'index']);
    $r->addRoute(['GET', 'POST'], '/login', ['Application\Controllers\AuthController', 'login']);
    $r->addRoute(['GET', 'POST'], '/registro', ['Application\Controllers\AuthController', 'registro']);

});

$route = $dispatcher->dispatch($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);

switch($route[0])
{
    case FastRoute\Dispatcher::NOT_FOUND:
        echo "404 NOT FOUND";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo "405 NOT ALLOWS";
        break;
    case FastRoute\Dispatcher::FOUND;
        $controller = $route[1];
        $parameters = $route[2];
        $container->call($controller, $parameters);
        break;
}
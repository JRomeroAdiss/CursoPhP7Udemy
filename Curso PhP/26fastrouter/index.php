<?php
require "vendor\autoload.php";

$dispacher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $route){

    //Ruta 1 de Users
    $route->addRoute("GET", "/users", "getAllUsers");
    //Ruta 2 de Users con su id
    $route->addRoute("GET", "/users/{id:\d+}", "getUser");
    //Ruta 3 de Post con un titulo
    $route->addRoute("GET", "/posts/{title}", "getPostByTitle");
});

$httpMethod = $_SERVER["REQUEST_METHOD"];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$routeInfo = $dispacher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]){
    case FastRoute\Dispatcher::NOT_FOUND:
        echo "Ruta no encontrada";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo "Ruta no permitida";
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $params = $routeInfo[2];
        call_user_func($handler, $params);
        break;
}

function getAllUsers(array $params = []){
    echo "Obtener todos los usuarios";
    echo "<br>";
    var_dump($params);
}

function getUser(array $params = []){
    echo "Obtener un usuario por el ID{$params['id']}";
}

function getPostByTitle(array $params = []){
    echo "Obtener un post por el titulo {$params['title']} ";
}
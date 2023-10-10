<?php

$cupon = filter_var($_GET['cupon'], FILTER_SANITIZE_STRING) ?? "CODIGO";
if (!$cupon){
    var_dump("No hay cupon");
}
var_dump($cupon);
echo "<br />";

$usuario = filter_var($_GET['usuario'], FILTER_SANITIZE_STRING) ?? "CODIGO";
if (!$usuario){
    var_dump("No hay usuarios registrados");
}
echo $usuario;
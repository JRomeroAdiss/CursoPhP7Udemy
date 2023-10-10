<?php

$usuario = "Jorge";
echo $usuario;

$usuario = "Cursodesarrollo";
echo "<br />";
echo $usuario;
echo "<br />";

$edad = 25;
echo $edad;
echo "<br />";

$precioCurso = 9.99;
echo $precioCurso;
echo "<br />";

$tecnologias = [
    "php", "javascript", "vuejs", "laravel", "react", "wordpress"
];
echo "<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br />";
echo $tecnologias[2];
echo "<br />";

$usuariObjeto = new stdClass;
$usuariObjeto->nombre = "Jorge Romero";
$usuariObjeto->edad = "25";
echo "<pre>";
var_dump($usuariObjeto);
echo "</pre>";
echo $usuariObjeto->nombre;


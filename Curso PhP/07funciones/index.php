<?php

function holaMundo(): string {
    return "Hola Mundo";
}
echo holaMundo();
echo "<br />";

$holaMundo = function (): string{
  return "Hola mundo";
};
echo $holaMundo();
echo "<br />";

function saluda(string $nombre='CursoDesarrolladorWeb'): string {
    return sprintf( 'Hola %s', $nombre);
}
echo  saluda();
echo "<br />";

//function integer_division(...$ints): int {
//    return intdiv($ints[0], $ints[1]);
//}
//echo integer_division(...ints: 10, 4);
echo "<br />";

function recorrer_usuarios(...$usuarios): string {
    $resutlado = '';
    foreach ($usuarios as $usuario) {
        $resutlado .="<br />{$usuario}";
    }
    return $resutlado;
}
//echo recorrer_usuarios(...usuarios: "usuario1", "usuario2", "usuario3");

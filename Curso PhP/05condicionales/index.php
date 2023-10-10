<?php
$a = 2;
$b = 3;

if ($a > $b){
    echo "A es mayor que B";
}elseif ($a === $b) {
    echo "A y B son iguales";
}else{
    echo "B es ayor que A";
}
echo "<br/>";

$nombre = null;
echo$nombre ? $nombre : "Curso";
echo "<br/>";

$nombre = "CursoDesarrolloWeb";
echo $nombre ?? "Curso";
echo "<br/>";

$mes = 2;
switch ($mes){
    case 1:
        echo "Enero";
        break;
    case 2:
        echo "Febrero";
        break;
    default:
        echo "Error";
        break;

}
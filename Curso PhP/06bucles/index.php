<?php

$usuarios = [ "usuario1", "usuario2", "usuario3", "usuario4"];

$i = 1;
while ($i <= 10) {
    echo $i, PHP_EOL;
    $i++;
}
echo "<br />";

$i = 1;
do {
    echo $i, PHP_EOL;
    $i++;
} while($i <=10);

echo "<br />";
for ($i = 1; $i<= 10; $i++){
    echo $i, PHP_EOL;
}

$i = 1;
echo "<br />";
for (; ;){
    if($i > 10){
        break;
    }
    echo $i, PHP_EOL;
    $i++;
}

echo "<br />";
for ($i = 0, $total = sizeof($usuarios); $i < $total; $i++){
    echo $usuarios[$i] . "<br />";

}


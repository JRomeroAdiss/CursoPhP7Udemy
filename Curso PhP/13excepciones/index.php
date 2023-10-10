<?php
function dividir (int $a, int $b = 0){
    if ($b === 0){
        throw new Exception ("Division por 0 controlada");
    }
    return $a / $b;
}
try {
    echo dividir(10);
}catch (Exception $exception){
    echo $exception->getMessage();
}finally{
    echo "<br />";
    echo "Final";
}

//Validar email
function comprobarCorreoElectronico(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception("El formato del correo electronico no es correcto");
    }
    return "Correo electronico correcto!";
}
echo "<br />";
try{
    echo comprobarCorreoElectronico("app@cursosdessarrolloweb.com");
}catch(Exception $exception){
    echo $exception->getMessage();
}finally{
    echo "<br />";
    echo "Final";
}

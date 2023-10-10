<?php

class Database {
    public string $name = "pruebas";

    public function __construct(){

    }

    public function select(): string{
        return "SELECT * FROM usuarios";
    }


}

class Usuario{
    protected Database $database;

    public function __construct(Database $database) {
        $this->database = $database;

    }

    public function selectUsuario():string{
        return  $this->database->select();
    }

    public function __toString()
    {
        return serialize($this->database);
    }
}

$db = new Database;
$usuario = new Usuario($db);
echo"<pre>";
echo $usuario;
echo"</pre>";
echo"<br />";
echo $usuario->selectUsuario();


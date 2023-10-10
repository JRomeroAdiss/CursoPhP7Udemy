<?php

class Usuario {
    protected $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function select(): string{
        return $this->database->select();
    }

}

$usuario = new Usuario(
    new class{
        public function select(): string{
            return "CONSULTA SELECT DE USUARIOS";
        }
    }
);

echo $usuario->select();
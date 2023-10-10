<?php
abstract class UsuarioAbstracto {
    abstract public function edad(int $edad): int;
    public function nombre(string $nombre): string {
        return $nombre;
    }
    public function apellido(string $apellido): string {
        return $apellido;
    }

}

class Usuario extends UsuarioAbstracto {
    public function edad(int $edad): int{
        return $edad;
    }
}

$usuario = new Usuario;
echo sprintf(
    '%s %s %d',
    $usuario->nombre('Jorge'),
    $usuario->apellido('Romero'),
    $usuario->edad(25)
);
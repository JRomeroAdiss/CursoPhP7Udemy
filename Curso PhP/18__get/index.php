<?php
class Producto {
    protected string $nombre;

    protected int $qty;

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function __get(string $name){
        if (!property_exists($this, $name)){
            die("La propiedad {$name} no existe");
        }
        return $this->{$name};
    }

}

$producto = new Producto;
$producto->setNombre("Producto 1");
echo $producto->nombre;


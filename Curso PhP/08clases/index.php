<?php
class  Usuario {
    /**
     * @var int
     */
    public int $id;

    /**
     * @var array
     */
    public  array $usuarios;

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->usuarios = ["Juan", "Jorge", "Leo"];
    }

    public function getNombre():string {
        return $this->usuarios[$this->id];
    }

    public function recorrerUsario():string{
        $resultado = '';
        foreach ($this->usuarios as $usuario){
            $resultado .= "<br />{$usuario}";
        }
        return $resultado;
    }

    public function encontrarUusario(int $id = null ): string {
        return  $this->usuarios[$id ?? $this->id];
    }
}

$usuario = new Usuario(1);
echo $usuario->id;
echo "<br />";
echo "<pre>";
var_dump($usuario->usuarios);
echo "</pre>";
echo "<br />";
echo $usuario->getNombre();
echo "<br />";
echo $usuario->recorrerUsario();
echo "<br />";
echo $usuario->encontrarUusario(1);
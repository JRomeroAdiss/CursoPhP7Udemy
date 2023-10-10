<?php


trait Cart{
    protected array $cart = [];

}

trait Sesion{
    public function login():string{
        return "Has iniciado sesion";
    }
}
class User {
    use Cart, Sesion;

    public function getCart(){
        return $this->cart;
    }
}

$user = new user();
var_dump($user);
echo "<br>";
var_dump($user->getCart());
echo "<br>";
echo $user->login();
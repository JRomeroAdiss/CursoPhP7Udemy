<?php

namespace Application\Controllers;

use Application\Entities\User;
use Application\Services\Doctrine;

class HomeController {

    public function index(Doctrine $doctrine){
        var_dump($doctrine);
    }

    public function insert(Doctrine $doctrine){
        try{
            $user = new User;
            $user->setEmail("jorge@jorgeromeromartinez.es");
            $user->setUsername("Jorge Romero");
            $user->setPassword(password_hash("password", PASSWORD_DEFAULT));
            $doctrine->em->persist($user);
            $doctrine->em->flush();
            echo "Se ha creado el usuario con id {$user->getId()} en base de datos!";
        } catch (\Exception $exception) {
            var_dump($exception->getMessage());
        }
    }
}
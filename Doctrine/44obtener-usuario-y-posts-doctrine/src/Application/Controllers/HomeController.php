<?php

namespace Application\Controllers;

use Application\Entities\Post;
use Application\Entities\User;
use Application\Services\Doctrine;

class HomeController {

    public function index(Doctrine $doctrine){
        var_dump($doctrine);
    }
//Inserta/Crea el usuariocon los parametros/valores que le damos por codigo
    public function insert(Doctrine $doctrine){
        try{
            $user = new User;
            $user->setEmail("jorge@jorgeromeromartinez.es");
            $user->setUsername("jorgeromero");
            $user->setPassword(password_hash("password", PASSWORD_DEFAULT));
            $doctrine->em->persist($user);
            $doctrine->em->flush();
            echo "Se ha creado el usuario con id {$user->getId()} en base de datos!";
        } catch (\Exception $exception) {
            var_dump($exception->getMessage());
        }
    }
//Mostramos todas las filas(usuarios) con todas las columnas(valores) de la BBDD(o de la tabla)
    public function all(Doctrine $doctrine){
        $users= $doctrine->em->getRepository('Application\Entities\User')->findAll();
        //Foreach muetra todos los valores de la BBDD
        foreach ($users as $user) {
            echo $this->formatUser($user);
        }
    }
//Buscamos un usuario de la BBDD(o de la tabla) por el id en la url
    public function findOne(Doctrine $doctrine, int $id){
       $user = $doctrine->em->find(User::class, $id);
        //Preguntamos si existe el id del user, si existe se muestran sus datos, si no existe se muestra el mensaje
       if ($user){
           echo $this->formatUser($user);
       }else{
           echo "El usuaio con id {$id} no existe";
       }
    }
//Actualizamos/Modificmos un usuario(en este caso solo el campo del nombre) por el id en la url
    public function update(Doctrine $doctrine, int $id){
        $user = $doctrine->em->find(User::class, $id);
        $user->setUsername("Jorge Romero");
        $doctrine->em->persist($user);
        $doctrine->em->flush();
        echo "Se ha actualizado el usuario con id {$user->getId()} en base de datos!";
    }
//Eliminamos en la BBDD(o en la tabla) el usuario por el id en la url
    public function remove(Doctrine $doctrine, int $id){
        $user = $doctrine->em->find(User::class, $id);
        //Preguntamos si existe el id del user, si no existe se para la ejecucion de la funcion
        if (!$user){
            echo "El usuaio con id {$id} no existe";
            exit;
        }
        $doctrine->em->remove($user);
        $doctrine->em->flush();
        echo "El usuaio con id {$id} ha sido eliminado de la BBDD";
    }
//Buscamos el usuario pero por su nombre con el metodo creado de UserRepository.php(getUserByUsername())
    public function findByUsername(Doctrine $doctrine, string $username){
        $user = $doctrine->em->getRepository(User::class)
            ->getUserByUsername($username);
        //Preguntamos si existe el id del user, si existe se muestran sus datos, si no existe se muestra el mensaje
        if ($user){
            echo $this->formatUser($user);
        }else{
            echo "El usuaio con nombre {$username} no existe";
        }
    }
//Inserta/Crea nuevo registro en la tabla de posts
    public function insertPost(Doctrine $doctrine, int $user_id){
        try {
            $user = $doctrine->em->find(User::class, $user_id);
            $post = new Post;
            $post->setUser($user);
            $post->setTitle("Nuevo post 2");
            $post->setBody("Contenido del post 2");
            $doctrine->em->persist($post);
            $doctrine->em->flush();
            echo "Nuevo posts vinculado al usuario con id {$user_id}";
        }catch(\Exception $exception){
            echo $exception->getMessage();
        }
    }


    public function findUserWithPosts(Doctrine $doctrine, int $user_id){
        $user = $doctrine->em->find(User::class, $user_id);
        if ($user){
            echo $this->formatUser($user);

            foreach ($user->getPosts() as $post){
                echo sprintf(
                  "%d, %s, %s, %s <br>",
                    $post->getId(),
                    $post->getTitle(),
                    $post->getBody(),
                    $user->getCreated()->format("d/m/Y H:i:s")
                );
            }
        }
    }

    /**
     * @param User $user
     * @return string
     */
    //Funcion de estado protegido para coger los valores del usuario
    protected function formatUser(User $user): string {
        return sprintf(
            "%d, %s, %s, %s, %s <br>",
            $user->getId(),
            $user->getUsername(),
            $user->getPassword(),
            $user->getEmail(),
            $user->getCreated()->format("d/m/Y H:i:s")
        );
    }
}
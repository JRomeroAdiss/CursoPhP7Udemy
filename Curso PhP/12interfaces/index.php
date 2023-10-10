<?php

interface ICrud {
    public function get(): string;
    public function find(int $id): string;
    public function create(array $array): string;
    public function update(array $array): string;
    public function delete(int $id): string;
}

class Crud implements  ICrud{

    public function get(): string
    {
        return "Obtener todos los usuarios";
    }

    public function find(int $id): string
    {
        return "Obtener el usuario con id {$id}";
    }

    public function create(array $array): string
    {
        return serialize($array);
    }

    public function update(array $array): string
    {
        return serialize($array);
    }

    public function delete(int $id): string
    {
        return "Eliminamos el usuario con id {$id}";
    }
}

$crud = new Crud;
echo $crud->get();
echo "<br />";
echo $crud->find(1);
echo "<br />";
echo $crud->create(["romero", 25]);
echo "<br />";
echo $crud->update([1, "romero", 25]);
echo "<br />";
echo $crud->delete(1);
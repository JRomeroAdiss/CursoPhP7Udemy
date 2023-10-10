<?php

namespace Blog\Persistences;

use Blog\Interfaces\IArticle;
use Blog\Models\Article;

class InMemoryArticle implements IArticle {

    protected array $articles;

    public function __construct()
    {
        $this->articles = [
            1 => new Article(1, "Articulo 1", "Nuevo contenido articulo 1"),
            2 => new Article(2, "Articulo 2", "Nuevo contenido articulo 2"),
        ];
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function getArticle(int $id)
    {
        return $this->articles[$id];
    }
}
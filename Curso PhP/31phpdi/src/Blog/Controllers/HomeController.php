<?php

namespace Blog\Controllers;

use Blog\Interfaces\IArticle;
use Twig\Environment;

class HomeController {

    /**
     * @var IArticle
     */
    protected IArticle $articleRepository;

    /**
     * @var Environment
     */
    protected Environment $twig;

    /**
     * @param IArticle $articleRepository
     * @param Environment $twig
     */
    public  function __construct(IArticle $articleRepository, Environment $twig)
    {
        $this->articleRepository = $articleRepository;
        $this->twig=$twig;
    }

    public function index(){
        echo "Hola desde el HomeController.php";
    }

    public function articulos() {
        echo $this->twig->render('home.twig', [
            "articles" => $this->articleRepository->getArticles()
        ]);
    }

    public function articulo(int $id) {
        $article = $this->articleRepository->getArticles($id);
        var_dump($article);
    }
}
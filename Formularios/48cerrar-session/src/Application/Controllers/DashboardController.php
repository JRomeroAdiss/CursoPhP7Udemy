<?php

namespace Application\Controllers;

use Twig\Environment;

class DashboardController
{
    public function index(Environment $twig){
        echo $twig->render("dashboard.twig", [
            "session" => $_SESSION
        ]);
    }

    public function logout(){
       if (isset($_POST['submit'])){
           session_destroy();
           $url = sprintf('%s/%s', BASE_URL, 'login');
           header("Location: {$url}");
           exit;
       }
        $url = sprintf('%s/%s', BASE_URL, 'dashboard');
        header("Location: {$url}");
    }
}
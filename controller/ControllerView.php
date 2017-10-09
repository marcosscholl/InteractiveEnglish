<?php


class ControllerView {

   public function index(){
            echo include("../view/index.php"); ;
    }

    public function login(){
            echo include("login.php"); ;
    }

    public function cadastro(){
            echo include("cadastro.php"); ;
    }

    public function cadastroAltera(){
            echo include("../view/cadastroAltera.php"); ;
    }

    public function indexView(){
            echo include("/view/index.php"); ;
    }

}


?>
<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio05;

    class Exercicio05Controller extends Controller{
      public function index(){
        $data["views"] = "home";
        $this->load("exe05/index",$data);
      }

      public function verificar(){
        $obj = new Exercicio05();
        $lado1 = isset($_POST["l1"]) ? $_POST["l1"] : null;
        $lado2 = isset($_POST["l2"]) ? $_POST["l2"] : null;
        $lado3 = isset($_POST["l3"]) ? $_POST["l3"] : null;
        $data["resultado"] = $obj->verificarTriangulo($lado1,$lado2,$lado3);
        $this->load("exe05/index",$data);
      }


  }









?>
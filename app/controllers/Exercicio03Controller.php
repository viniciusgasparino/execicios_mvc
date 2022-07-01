<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio03;

    class Exercicio03Controller extends Controller{
        public function index(){
          $data["resultado"] = null;
          $data["view"] = "home";
          $this->load("exe03/index",$data);
        }

        public function comparar(){
          $obj = new Exercicio03();
          $num1 = $_POST["n1"];
          $num2 = $_POST["n2"];
          $num3 = $_POST["n3"];
          $data["resultado"] = $obj->compararNumero($num1,$num2,$num3);
          $this->load("exe03/index",$data);
        }


  }











?>
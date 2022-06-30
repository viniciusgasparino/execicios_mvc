<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio01;

    class Exercicio01Controller extends Controller{
      public function index(){
        $data["resultado"] = null;
        $data["view"] = "home";
        $this->load("exe01/index",$data);
      }
            
      public function calcular(){
        $obj = new Exercicio01();
        $number = isset($_POST["num"]) ? $_POST["num"] : null;
        $data["resultado"] = $obj->parOuImpar($number);
        $data["number"] = $number;
        $this->load("exe01/index",$data);
      }




  }









?>
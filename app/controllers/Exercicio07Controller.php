<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio07;

    class Exercicio07Controller extends Controller{
        public function index(){
          $data["resultado"] = null;
          $data["view"] = "home";
          $this->load("exe07/index",$data);  
        }

        public function calcular(){
          $obj = new Exercicio07();
          $nota1 = $_POST["n1"];
          $nota2 = $_POST["n2"];
          $nota3 = $_POST["n3"];
          $nota4 = $_POST["n4"];
          $data["resultado"] = $obj->calcularMedia($nota1,$nota2,$nota3,$nota4);
          $data["nota1"] = $nota1;
          $data["nota2"] = $nota2;
          $data["nota3"] = $nota3;
          $data["nota4"] = $nota4;
          $this->load("exe07/index",$data);
        }




  }









?>
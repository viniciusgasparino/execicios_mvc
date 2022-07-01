<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio04;

    class Exercicio04Controller extends Controller{
      public function index(){
        $data["salarioTotal"] = null;
        $data["bonus"] = null;
        $data["view"] = "home";
        $this->load("exe04/index",$data);
      }

      public function calcular(){
        $obj = new Exercicio04();
        $salario = $_POST["sal"];
        $tempo = $_POST["time"];
        $data["salarioTotal"] = $obj->calcularSalario($salario,$tempo);
        $data["bonus"] = $obj->calcularBonus($salario,$tempo);
        $this->load("exe04/index",$data);
      }




  }














?>
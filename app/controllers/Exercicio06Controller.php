<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio06;

    class Exercicio06Controller extends Controller{
      public function index(){
        $data["nome"] = null;
        $data["ir"] = null;
        $data["salarioLiquido"] = null;
        $data["views"] = "home";
        $this->load("exe06/index",$data);
      }

      public function calcular(){
        $obj = new Exercicio06();
        $nome = $_POST["nome"];
        $dependentes = $_POST["dep"];
        $salarioBruto = $_POST["bruto"];
        $data["nome"] = $obj->getNome($nome);
        $data["ir"] = $obj->calcularIr($dependentes,$salarioBruto);
        $data["salarioLiquido"] = $obj->CalcularSalario($dependentes,$salarioBruto);
        $this->load("exe06/index",$data);
      }



  }








?>
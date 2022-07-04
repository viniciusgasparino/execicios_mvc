<?php

namespace app\models;
use app\core\Controller;

  class Exercicio06 {
    public function getNome($nome){
      return $nome;
    }

    public function calcularSalario($dependentes,$salarioBruto){
      $abatimento = 600 * $dependentes; 
      $salarioLiquido = $salarioBruto - $abatimento;
      return $salarioLiquido;
    }

    public function calcularIr($dependentes,$salarioBruto){
      $salarioLiquido = $this->calcularSalario($dependentes,$salarioBruto);
        if($salarioLiquido<=10000){
          return $ir = 0;
        }elseif($salarioLiquido>10000 && $salarioLiquido<=30000){
          return $ir = $salarioLiquido * 0.05;
        }elseif($salarioLiquido>30000 && $salarioLiquido<=60000){
          return $ir = $salarioLiquido * 0.10;
        }else{
          return $ir = $salarioLiquido * 0.15;
        } 
    }





  }








?>
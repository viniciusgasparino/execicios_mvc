<?php

  namespace app\models;
  use app\core\Controller;

    class Exercicio04 {
      public function calcularBonus($salario,$tempo){
        if($tempo >= 5){
          return $bonus = 0.20 * $salario;
        }else{
          return $bonus = 0.10 * $salario;  
        }
      }

      public function calcularSalario($salario,$tempo){
        if($tempo >= 5){
            $bonus = 0.20 * $salario;
            return $salarioTotal = $salario + $bonus;
        }else{
            $bonus = 0.10 * $salario;  
            return $salarioTotal = $salario + $bonus;
        }
      }


  }











?>
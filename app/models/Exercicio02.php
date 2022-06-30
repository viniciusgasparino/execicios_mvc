<?php

  namespace app\models;
  use app\core\Controller;

    class Exercicio02 {
      public function verifyNumber1($number1,$number2){
          $maior = 0;
          $menor = 0;
          if($number1 > $number2){
              $maior = $number1;
              return $maior;
          }else{
            $menor = $number1;
            return $menor;
          }
      }

      public function verifyNumber2($number1,$number2){
          $maior = 0;
          $menor = 0;
          if($number2 > $number1){
              $maior = $number2;
              return $maior;
          }else{
            $menor = $number2;
            return $menor;
          }
      }

      public function verifySinal($number1,$number2){
          if($number1 > $number2){
            return $sinal = ">";
          }elseif($number1 < $number2){
            return $sinal = "<";
          }else{
            return $sinal = "=";
          }
      }
      


  }




?>
<?php

  namespace app\models;
  use app\core\Controller;

    class Exercicio01 {
      public function parOuImpar($number){
        $par = "par";
        $impar = "impar";
                  
        if($number%2===0){
          return $par;
        }elseif($number%2===1){
          return $impar;
        }
      }


  }









?>
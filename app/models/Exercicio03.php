<?php

  namespace app\models;
  use app\core\Controller;

    class Exercicio03 {
      public function compararNumero($num1,$num2,$num3){
        $resultado = "";
        if($num1===$num2 && $num1===$num3 && $num2===$num3){
            $resultado = "os  3 números são iguais";
            return $resultado;
        }elseif($num1===$num2 && $num1!==$num3 && $num2!==$num3){
            $resultado = "$num1 e $num2 são iguais";
            return $resultado;
        }elseif($num1!==$num2 && $num1===$num3 && $num2!==$num3){
            $resultado = "$num1 e $num3 são iguais";
            return $resultado;
        }elseif($num1!==$num2 && $num1!==$num3 && $num2===$num3){
            $resultado = "$num2 e $num3 são iguais";
            return $resultado;
        }else{
           $resultado = "os numeros são diferentes";
            return $resultado;
        }
      }


  }








?>
<?php

namespace app\models;
use app\core\Controller;

  class Exercicio05 {
    public function verificarTriangulo($lado1,$lado2,$lado3){
      if($lado1 < $lado2 + $lado3 && $lado2 < $lado1 + $lado3 && $lado3 < $lado1 + $lado2){
          if($lado1==$lado2 && $lado2==$lado3){
            return "É um triangulo equilatero";  
          }elseif($lado1!==$lado2 && $lado2!==$lado3 && $lado1!==$lado3){
            return "É um triangulo escaleno";  
          }else{
            return "É um triangulo isósceles";  
          }
      }else{
        return "nao forma um triangulo";
      }
    }
}






?>
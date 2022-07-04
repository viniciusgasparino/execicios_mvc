<?php

  namespace app\models;
  use app\core\Controller;

    class Exercicio07 {
      public function calcularMedia($nota1,$nota2,$nota3,$nota4){
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        if($media >= 7 & $media === 10){
           return "Aluno aprovado com a media $media";
        }elseif($media < 7 & $media >= 5){
          return "Aluno de recuperação  com a media $media";  
        }elseif($media < 5){
          return "aluno reprovado com a media $media";
        }else{
          return "essa nota está errada";
        }
      }

  }







?>
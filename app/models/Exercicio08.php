<?php

  namespace app\models;
  use app\core\Controller;

    class Exercicio08 {
      public function calcularTerreno($areaTotal,$areaContruida){
        $areaVazia = $areaTotal - $areaContruida;
        $valor = ($areaContruida * 5) + ($areaVazia * 3.8);
        return $valor;
      }
  }






?>
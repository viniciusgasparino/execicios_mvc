<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio08;

    class Exercicio08Controller extends Controller{
      public function index(){
        $data["view"] = "home";
        $this->load("exe08/index",$data);
      }

      public function calcular(){
       $obj = new Exercicio08();
       $areaTotal = $_POST["area"];
       $areaContruida = $_POST["cos"];
       $data["resultado"] = $obj->calcularTerreno($areaTotal,$areaContruida);
       $this->load("exe08/index",$data);
    }


}




?>
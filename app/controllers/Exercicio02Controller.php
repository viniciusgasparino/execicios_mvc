<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Exercicio02;

    class Exercicio02Controller extends Controller{
      public function index(){
        $data["view"] = "home";
        $this->load("exe02/index");
      }  

      public function verificar(){
        $obj = new Exercicio02();
        $number1 = isset($_POST["n1"]) ? $_POST["n1"] : null;
        $number2 = isset($_POST["n2"]) ? $_POST["n2"]: null;
        $data["number1"] = $obj->verifyNumber1($number1,$number2);
        $data["number2"] = $obj->verifyNumber2($number1,$number2);
        $data["sinal"] = $obj->verifySinal($number1,$number2);
        $this->load("exe02/index",$data);
      }


  }








?>
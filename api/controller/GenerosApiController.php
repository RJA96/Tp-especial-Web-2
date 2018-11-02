<?php

require_once "Api.php";
require_once "./../php/Model/GenerosModel.php";

class GenerosApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new GenerosModel();
  }

  function GetGenero($param = null){

    if(isset($param)){
        $id_genero = $param[0];
        $arreglo = $this->model->getGeneroID($id_genero);
        $data = $arreglo;

    }else{
      $data = $this->model->getGenero();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function DeleteGenero($param = null){
    if(count($param) == 1){
        $id_genero = $param[0];
        $r =  $this->model->BorrarGenero($id_genero);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertGenero($param = null){

    $objetoJson = $this->getJSONData();
    $r = $this->model->InsertarGenero($objetoJson->nombre, $objetoJson->cantidad);

    return $this->json_response($r, 200);
  }

  function UpdateGenero($param = null){
    if(count($param) == 1){
      $id_genero = $param[0];
      $objetoJson = $this->getJSONData();
      $r = $this->model->EditarGenero($id_genero, $objetoJson->nombre,$objetoJson->cantidad);
      return $this->json_response($r, 200);

    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
}
 ?>

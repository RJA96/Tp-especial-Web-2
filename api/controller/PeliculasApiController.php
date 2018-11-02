<?php

require_once "Api.php";
require_once "./../php/Model/MoviesModel.php";

class PeliculasApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new MoviesModel();
  }

  function GetPelicula($param = null){

    if(isset($param)){
        $id_pelicula = $param[0];
        $arreglo = $this->model->getPelicula($id_pelicula);
        $data = $arreglo;

    }else{
      $data = $this->model->getPeliculas();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function DeletePelicula($param = null){
    if(count($param) == 1){
        $id_pelicula = $param[0];
        $r =  $this->model->BorrarPeli($id_pelicula);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertPelicula($param = null){

    $objetoJson = $this->getJSONData();
    $r = $this->model->InsertarPelicula($objetoJson->nombre, $objetoJson->año, $objetoJson->valoracion, $objetoJson->duracion, $objetoJson->id_genero);
    return $this->json_response($r, 200);
  }

  function UpdatePelicula($param = null){
    if(count($param) == 1){
      $id_pelicula = $param[0];
      $objetoJson = $this->getJSONData();
      $r = $this->model->EditarPelicula($objetoJson->nombre, $objetoJson->año, $objetoJson->valoracion, $objetoJson->duracion, $objetoJson->id_genero, $id_pelicula);
      return $this->json_response($r, 200);

    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
}
 ?>

<?php

require_once "Api.php";
require_once "./../php/Model/ComentariosModel.php";

class ComentariosApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }

  function GetComentarioPelicula($param){
     $id_pelicula = $param[0];
    $arreglo = $this->model->GetComentariosPelicula($id_pelicula);
     $data = $arreglo;
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function DeleteComentario($param = null){
    if(count($param) == 1){
        $id_comentario = $param[0];
        $r =  $this->model->BorrarComentario($id_comentario);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertComentario(){
    $objetoJson = $this->getJSONData();
    $r = $this->model->InsertarComentario($objetoJson->coment,$objetoJson->id_pelicula,$objetoJson->id_usuario );
    return $this->json_response($r, 200);
  }



  }

 ?>

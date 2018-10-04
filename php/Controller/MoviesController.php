<?php
require_once  "php\View\MoviesView.php";
require_once  "php\Model\MoviesModel.php";

class MoviesController{
  private $view;
  private $model;

  function __construct(){
    $this->view = new MoviesView();
    //$this->model = new TareasModel();
  }
  

  function Mostrar($titulo){
  //  $Home = "home"
    //$Tareas = $this->model->GetHome();
    $this->view->parseULR($titulo);
  }
  function Contacto(){
  //  $Contacto = "contacto"
  //  $Tareas = $this->model->GetContacto();
    $this->view->parseULR();
  }
}

?>

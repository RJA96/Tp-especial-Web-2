<?php
require_once  "php\View\TareasView.php";
//require_once  "php\Model\TareasModel.php";

class TareasController{
  private $view;
  private $model;

  function __construct(){
    $this->view = new TareasView();
    //$this->model = new TareasModel();
  }

  function Mostrar($titulo){
  //  $Home = "home"
    //$Tareas = $this->model->GetHome();
    $this->view->Mostrar($titulo);
  }
  function Contacto(){
  //  $Contacto = "contacto"
  //  $Tareas = $this->model->GetContacto();
    $this->view->Mostrar();
  }
}

 ?>

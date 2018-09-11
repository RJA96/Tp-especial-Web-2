<?php
require_once  "./view/TareasView.php";
require_once  "./model/TareasModel.php";

class TareasController{
  private $view;
  private $model;

  function __construct(){
    $this->view = new TareasView();
    $this->model = new TareasModel();
  }

  function Home(){
    $Home = "home"
    $Tareas = $this->model->GetHome();
    $this->view->Mostrar($Home);
  }
  function Contacto(){
    $Contacto = "contacto"
    $Tareas = $this->model->GetContacto();
    $this->view->Mostrar($Contacto);
  }
}

 ?>

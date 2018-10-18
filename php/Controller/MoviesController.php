<?php
require_once  "php\View\MoviesView.php";
require_once  "php\View\PaginaView.php";
require_once  "php\Model\MoviesModel.php";
require_once  "php\Model\GenerosModel.php";


class MoviesController{
  private $viewpagina;
  private $viewPDO;
  private $modelpeliculas;
  private $modelgeneros;


  function __construct(){
    $this->viewpagina = new PaginaView();
    $this->modelpeliculas = new MoviesModel();
    $this->viewPDO = new MoviesView();
    $this->modelgeneros = new GenerosModel();
  }


  function Mostrar($titulo){
    $this->viewpagina->parseULR($titulo);
  }

  function MostrarPDO(){
    $Peliculas = $this->modelpeliculas->getPeliculas();
    $Generos = $this->modelgeneros->getGenero();
    $this->viewPDO->MostrarTabla($Peliculas, $Generos);
  }

  //funcion MostrarTabla($titulo){
    //$Peliculas = $this->model->getPeliculas();
    //$this->view->Mostrar($this->titulo, $Tareas);
  //}
  function Contacto(){
  //  $Contacto = "contacto"
  //  $Tareas = $this->model->GetContacto();
    $this->view->parseULR();
  }
}

?>

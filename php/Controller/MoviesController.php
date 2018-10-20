<?php
require_once  "php\View\MoviesView.php";
require_once  "php\View\PaginaView.php";
require_once  "php\Model\MoviesModel.php";
require_once  "php\Model\GenerosModel.php";
require_once "SecuredController.php";


class MoviesController extends SecuredController{
  private $viewpagina;
  private $viewPDO;
  private $modelpeliculas;
  private $modelgeneros;


  function __construct(){
    parent::__construct();
    $this->viewpagina = new PaginaView();
    $this->modelpeliculas = new MoviesModel();
    $this->viewPDO = new MoviesView();
    $this->modelgeneros = new GenerosModel();
  }

//  if(isset($_SESSION["User"])){
  //  $user = $_SESSION["User"];
  //  $this->viewpagina->Home($user);
  //}else{
  //  $this->Login();
  function Home(){
      $this->viewpagina->Home();
  }
  function Contacto(){
    $this->viewpagina->Contacto();
  }
  function AllMovies(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $this->viewpagina->AllMovies($user);
    }else{
      $this->viewpagina->AllMovies("");
    }
  }
  function Login(){
    $this->viewpagina->Login();
  }
  function Registrar(){
    $this->viewpagina->Registrar();
  }
  function Sugerencias(){
    $this->viewpagina->Sugerencias();
  }

  function MostrarPDOGeneros(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarGeneros($Generos, $user);
    }else{
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarGeneros($Generos, "");
    }
  }

  function MostrarPDOPeliculas(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $Peliculas = $this->modelpeliculas->getPeliculas();
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarPeliculas($Peliculas, $Generos, $user);
    }else{
      $Peliculas = $this->modelpeliculas->getPeliculas();
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarPeliculas($Peliculas, $Generos, "");
    }
  }
  function MostrarPDOPeliculasporGenero($Genero){
    $Peliculas = $this->modelpeliculas->getPeliculasporGenero($Genero[0]);
    $Generos = $this->modelgeneros->getGenero();
    $this->viewPDO->MostrarPeliculas($Peliculas, $Generos);
  }

  function MostrarPDOeditpelicula($param){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $Pelicula = $this->modelpeliculas->getPelicula($param[0]);
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarEditar($Pelicula, $Generos);
      }else{
        $this->viewpagina->Login();
      }
  }

  function MostrarPDOeditgenero($param){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
    $Generos = $this->modelgeneros->getGeneroID($param[0]);
    $this->viewPDO->MostrarEditarGenero($Generos);
    }else{
      $this->viewpagina->Login();
    }
  }

  function InsertarGenero(){
    $nombre = $_POST["Nombre"];
    $cantpeliculas = $_POST["cantidad_peliculas"];
    $this->modelgeneros->InsertarGenero($nombre, $cantpeliculas);
    $this->MostrarPDOGeneros();
}
function EditarGenero(){
  if(isset($_SESSION["User"])){
    $user = $_SESSION["User"];
  $id_genero = $_POST["id_genero"];
  $nombre = $_POST["Nombre"];
  $cantpeliculas = $_POST["cantidad_peliculas"];
  $this->modelgeneros->EditarGenero($id_genero, $nombre, $cantpeliculas);
  $this->MostrarPDOGeneros();
  }else{
    $this->viewpagina->Login();
  }
}

  function BorrarGenero($param){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $this->modelgeneros->BorrarGenero($param[0]);
      $this->MostrarPDOGeneros();
    }else{
      $this->viewpagina->Login();
    }
  }

  function BorrarPeli($param){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $this->modelpeliculas->BorrarPeli($param[0]);
      $this->MostrarPDOPeliculas();
    }else{
      $this->viewpagina->Login();
    }
  }

function InsertarPelicula(){
  if(isset($_SESSION["User"])){
    $user = $_SESSION["User"];
    $nombre = $_POST["Nombre_peli"];
    $Año = $_POST["Año"];
    $Valoracion = $_POST["Valoracion"];
    $Duracion = $_POST["Duracion"];
    $genero = $_POST["genero"];
    $this->modelpeliculas->InsertarPelicula($nombre, $Año, $Valoracion ,$Duracion ,$genero);
    $this->MostrarPDOPeliculas();
  }else{
    $this->viewpagina->Login();
  }
}

function EditarPelicula(){
  if(isset($_SESSION["User"])){
    $user = $_SESSION["User"];
    $nombre = $_POST["Nombre_peli"];
    $Año = $_POST["Año"];
    $Valoracion = $_POST["Valoracion"];
    $Duracion = $_POST["Duracion"];
    $genero = $_POST["genero"];
    $id_peli = $_POST["id_peli"];
    $this->modelpeliculas->EditarPelicula($nombre, $Año, $Valoracion ,$Duracion ,$genero,$id_peli);
    $this->MostrarPDOPeliculas();
  }else{
    $this->viewpagina->Login();
  }

}
}

?>

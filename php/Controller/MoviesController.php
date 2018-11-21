<?php
require_once  "php/View/MoviesView.php";
require_once  "php/View/PaginaView.php";
require_once  "php/Model/MoviesModel.php";
require_once  "php/Model/GenerosModel.php";
require_once  "php/Model/UsuarioModel.php";
require_once "SecuredController.php";


class MoviesController extends SecuredController{
  private $viewpagina;
  private $viewPDO;
  private $modelpeliculas;
  private $modelgeneros;
  private $modelusuarios;

  function __construct(){
    parent::__construct();
    $this->viewpagina = new PaginaView();
    $this->modelpeliculas = new MoviesModel();
    $this->viewPDO = new MoviesView();
    $this->modelgeneros = new GenerosModel();
    $this->modelusuarios = new UsuarioModel();

  }

  function Home(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->viewpagina->Home($user,$admin);
    }else{
      $this->viewpagina->Home("","");
    }
  }
  function Contacto(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->viewpagina->Contacto($user,$admin);
    }else{
      $this->viewpagina->Contacto("","");
    }
  }
  function AllMovies(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->viewpagina->AllMovies($user,$admin);
    }else{
      $this->viewpagina->AllMovies("","");
    }
  }
  function Login(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->viewpagina->Login($user,$admin);
    }else{
      $this->viewpagina->Login("","");
    }
  }
  function Registrar(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->viewpagina->Registrar($user,$admin);
    }else{
      $this->viewpagina->Registrar("","");
    }
  }
  function Sugerencias(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->viewpagina->Sugerencias($user,$admin);
    }else{
      $this->viewpagina->Sugerencias("","");
    }
  }

  function MostrarPDOGeneros(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarGeneros($Generos, $user,$admin);
    }else{
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarGeneros($Generos, "","");
    }
  }

  function MostrarPDOPeliculas(){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $Peliculas = $this->modelpeliculas->getPeliculas();
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarPeliculas($Peliculas, $Generos, $user,$admin);
    }else{
      $Peliculas = $this->modelpeliculas->getPeliculas();
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarPeliculas($Peliculas, $Generos, "","");
    }
  }
  function MostrarPDOPeliculasporGenero($Genero){
    if(isset($_SESSION["User"])){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $Peliculas = $this->modelpeliculas->getPeliculasporGenero($Genero[0]);
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarPeliculas($Peliculas, $Generos,$user,$admin);
    }else{
      $Peliculas = $this->modelpeliculas->getPeliculasporGenero($Genero[0]);
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarPeliculas($Peliculas, $Generos,"","");
    }
  }

  function MostrarPDOeditpelicula($param){
    if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $Pelicula = $this->modelpeliculas->getPelicula($param[0]);
      $Generos = $this->modelgeneros->getGenero();
      $this->viewPDO->MostrarEditar($Pelicula, $Generos, $user,$admin);
      }else{
        header(LOGIN);
      }
  }

  function MostrarPDOeditgenero($param){
    if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
    $Generos = $this->modelgeneros->getGeneroID($param[0]);
    $this->viewPDO->MostrarEditarGenero($Generos,$user,$admin);
    }else{
      header(LOGIN);;
    }
  }

  function InsertarGenero(){
    if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $nombre = $_POST["Nombre"];
      $cantpeliculas = $_POST["cantidad_peliculas"];
      $this->modelgeneros->InsertarGenero($nombre, $cantpeliculas);
      header(PDO);
    }else{
      header(LOGIN);
    }
}
function EditarGenero(){
  if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
   $user = $_SESSION["User"];
   $admin = $_SESSION["Admin"];
   $id_genero = $_POST["id_genero"];
   $nombre = $_POST["Nombre"];
   $cantpeliculas = $_POST["cantidad_peliculas"];
   $this->modelgeneros->EditarGenero($id_genero, $nombre, $cantpeliculas);
   header(PDO);
  }else{
   header(LOGIN);
  }
}

  function BorrarGenero($param){
    if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->modelgeneros->BorrarGenero($param[0]);
      header(PDO);
    }else{
      header(LOGIN);
    }
  }

  function BorrarPeli($param){
    if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
      $user = $_SESSION["User"];
      $admin = $_SESSION["Admin"];
      $this->modelpeliculas->BorrarPeli($param[0]);
      header(PDOPELICULA);
    }else{
      header(LOGIN);
    }
  }

function InsertarPelicula(){
  if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
    $user = $_SESSION["User"];
    $admin = $_SESSION["Admin"];
    $nombre = $_POST["Nombre_peli"];
    $Año = $_POST["Año"];
    $Valoracion = $_POST["Valoracion"];
    $Duracion = $_POST["Duracion"];
    $img = $_POST["Img"];
    $genero = $_POST["genero"];
    $this->modelpeliculas->InsertarPelicula($nombre, $Año, $Valoracion ,$Duracion,$img,$genero);
    header(PDOPELICULA);
  }else{
    header(LOGIN);
  }
}

function EditarPelicula(){
  if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
    $user = $_SESSION["User"];
    $admin = $_SESSION["Admin"];
    $nombre = $_POST["Nombre_peli"];
    $Año = $_POST["Año"];
    $Valoracion = $_POST["Valoracion"];
    $Duracion = $_POST["Duracion"];
    $img = $_POST["Img"];
    $genero = $_POST["genero"];
    $id_peli = $_POST["id_peli"];
    $this->modelpeliculas->EditarPelicula($nombre, $Año, $Valoracion ,$Duracion ,$img,$genero,$id_peli);
    header(PDOPELICULA);
  }else{
    header(LOGIN);
  }
}

function Admin(){
  if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
    $user = $_SESSION["User"];
    $admin = $_SESSION["Admin"];
    $usuarios = $this->modelusuarios->GetUsuario();
    $this->viewpagina->Mostraradmin($user,$admin, $usuarios);
  }else{
    header(LOGIN);
  }
}

function VolverAdmin($param){
  if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
    $this->modelusuarios->DarAdmin($param[0]);
    header(ADMIN);
  }else{
    header(LOGIN);
  }
}

function QuitarAdmin($param){
  if((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
    $this->modelusuarios->QuitarAdmin($param[0]);
    header(ADMIN);
  }else{
    header(LOGIN);
  }
}

function VerComentarios($param){
  $Pelicula = $this->modelpeliculas->getPelicula($param[0]);
  $Generos = $this->modelgeneros->getGenero();

  if((isset($_SESSION["User"])&&($_SESSION["Admin"]==0))){
    $user = $_SESSION["User"];
    $admin = $_SESSION["Admin"];
    $this->viewPDO->MostrarComentarios($user,$admin,$Pelicula,$Generos);
  }elseif((isset($_SESSION["User"])&&($_SESSION["Admin"]==1))){
    $user = $_SESSION["User"];
    $admin = $_SESSION["Admin"];
    $this->viewPDO->MostrarComentarios($user,$admin,$Pelicula,$Generos);
  }

  else{
    $this->viewPDO->MostrarComentarios("","",$Pelicula,$Generos);
  }
}
}

?>

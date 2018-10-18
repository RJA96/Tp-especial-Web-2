<?php
require_once "php\Controller\MoviesController.php";
//Para hacer mvc, creo el controlador, lo llamo y hago pretty url
$controller = new MoviesController();
$partesURL = explode('/', $_GET['action']);

if ($partesURL[0] == '') {
  $controller->Mostrar("home");
}elseif ($partesURL[0] == 'Contacto') {
   $controller->Mostrar("Contacto");

  }elseif ($partesURL[0] == 'AllMovies') {
    $controller->Mostrar("AllMovies");
  }elseif ($partesURL[0] == 'Login') {
      $controller->Mostrar("Login");
  }elseif ($partesURL[0] == 'Registrar') {
    $controller->Mostrar("Registrar");

  }elseif ($partesURL[0] == 'Sugerencias') {
    $controller->Mostrar("Sugerencias");
  }elseif ($partesURL[0] == 'PDO') {
    $controller->MostrarPDO();
  }


 ?>

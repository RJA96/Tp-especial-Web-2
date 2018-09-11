<?php
require_once "php\Controller\TareasController.php";
//Para hacer mvc, creo el controlador, lo llamo y hago pretty url
$controller = new TareasController();
$partesURL = explode('/', $_GET['action']);

if ($partesURL[0] == '') {
  $controller->Home("home");
}elseif ($partesURL[0] == 'Contacto') {
   $controller->Home("Contacto");

  }elseif ($partesURL[0] == 'AllMovies') {
    $controller->Home("AllMovies");
  }elseif ($partesURL[0] == 'Login') {
      $controller->Home("Login");
  }elseif ($partesURL[0] == 'Registro') {
    $controller->Home("Registro");

  }elseif ($partesURL[0] == 'Sugerencias') {
    $controller->Home("Sugerencias");
  }


 ?>

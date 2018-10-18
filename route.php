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
  }elseif ($partesURL[0] == 'agregar_genero') {
    $controller->InsertarGenero();
}elseif ($partesURL[0] == 'agregar_pelicula') {
  $controller->InsertarPelicula();
}elseif ($partesURL[0] == 'borrargenero') {
  $controller->BorrarGenero($partesURL[1]);
}elseif ($partesURL[0] == 'borrarpelicula') {
  $controller->BorrarPeli($partesURL[1]);
}elseif ($partesURL[0] == 'editarpelicula') {
  $controller->BorrarPeli($partesURL[1]);
}

 ?>

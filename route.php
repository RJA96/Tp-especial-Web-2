<?php
require_once "php/controller/TareasController.php";
//Para hacer mvc, creo el controlador, lo llamo y hago pretty url
$controller = new TareasController();
$partesURL = explode('/', $_GET['action']);

if ($partesURL[0] == '') {
  $controller->Home();
}else {
  if ($partesURL[0] == 'Contacto') {
    $controller->Mostrar("Contacto");
  }elseif ($partesURL[0] == 'AllMovies') {
    $controller->Mostrar("AllMovies");
  }elseif ($partesURL[0] == 'Login') {
      $controller->Mostrar("Login");
  }
}elseif ($partesURL[0] == 'Registro') {
    $controller->Mostrar("Registro");
}
}elseif ($partesURL[0] == 'Sugerencias') {
    $controller->MostrarContacto("Sugerencias");
}
}

 ?>

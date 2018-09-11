<?php
require_once "php/controller/TareasController.php";
//Para hacer mvc, creo el controlador, lo llamo y hago pretty url
$controller = new TareasController();
$partesURL = explode('/', $_GET['action']);

if ($partesURL[0] == '') {
  $controller->Home();
}else {
  if ($partesURL[0] == 'Contacto') {
    $controller->MostrarContacto();
  }elseif ($partesURL[0] == 'borrar') {
    BorrarTarea($partesURL[1]);
  }elseif ($partesURL[0] == 'completada') {
      CompletarTarea($partesURL[1]);
  }
}

 ?>

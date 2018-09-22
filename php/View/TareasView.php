<?php
require('libs/Smarty.class.php');
/**
 *
 */
class TareasView
{

  function Mostrar($tarea){
    $smarty = new Smarty();

    //$smarty->debugging = true;
    // $smarty->display('templates/home.tpl');

   ?>






    <?php
    if ($tarea == "home"){
      $smarty->display('templates/home.tpl');



  }elseif ($tarea == "AllMovies"){
    $smarty->display('templates/AllMovies.tpl');



  }elseif ($tarea == "Contacto") {
  $smarty->display('templates/Contacto.tpl');



  }elseif ($tarea == "Login") {
  $smarty->display('templates/Login.tpl');





  }elseif ($tarea == "Registrar") {
  $smarty->display('templates/Registrar.tpl');




}elseif ($tarea == "Sugerencias") {
  $smarty->display('templates/Sugerencias.tpl');
?>
  <?php
    }
   }
 }
  ?>

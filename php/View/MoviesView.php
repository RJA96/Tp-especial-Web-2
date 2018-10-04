<?php
require('libs/Smarty.class.php');
/**
 *
 */
class MoviesView{

  function parseULR($Url){
    $smarty = new Smarty();

    //$smarty->debugging = true;

    if ($Url == "home"){
    $smarty->display('templates/home.tpl');

      }elseif ($Url == "AllMovies"){
      $smarty->display('templates/AllMovies.tpl');
      }elseif ($Url == "Contacto") {
      $smarty->display('templates/Contacto.tpl');
      }elseif ($Url == "Login") {
      $smarty->display('templates/Login.tpl');
      }elseif ($Url == "Registrar") {
      $smarty->display('templates/Registrar.tpl');
      }elseif ($Url == "Sugerencias") {
      $smarty->display('templates/Sugerencias.tpl');
      }elseif ($Url == "PDO"){
        $smarty->display('templates/Test.tpl');
      }
  }
}
?>

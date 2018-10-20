<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class PaginaView{

  function Home(){
    $smarty->display('templates/home.tpl');
  }
  function AllMovies(){
    $smarty->display('templates/AllMovies.tpl');
  }
  function Contacto(){
    $smarty->display('templates/Contacto.tpl');
  }
  function Login(){
    $smarty->display('templates/Login.tpl');
  }
  function Registrar(){
    $smarty->display('templates/Registrar.tpl');
  }
  function Sugerencias(){
    $smarty->display('templates/Sugerencias.tpl');
  }



}
 ?>

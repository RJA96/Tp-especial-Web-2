<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class PaginaView{

  function Home(){
    $smarty = new Smarty();
    $smarty->display('templates/home.tpl');
  }
  function AllMovies($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/AllMovies.tpl');
  }
  function Contacto(){
    $smarty = new Smarty();
    $smarty->display('templates/Contacto.tpl');
  }
  function Login(){
    $smarty = new Smarty();
    $smarty->display('templates/Login.tpl');
  }
  function Registrar(){
    $smarty = new Smarty();
    $smarty->display('templates/Registrar.tpl');
  }
  function Sugerencias(){
    $smarty = new Smarty();
    $smarty->display('templates/Sugerencias.tpl');
  }



}
 ?>

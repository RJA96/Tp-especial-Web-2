<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class PaginaView{

  function Home($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/home.tpl');
  }
  function AllMovies($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/AllMovies.tpl');
  }
  function Contacto($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/Contacto.tpl');
  }
  function Login($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/Login.tpl');
  }
  function Registrar($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/Registrar.tpl');
  }
  function Sugerencias($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/Sugerencias.tpl');
  }

  function MostrarAdmin ($user, $usuarios){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('usuarios',$usuarios);
    $smarty->display('templates/Admin.tpl');
  }


}
 ?>

<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class PaginaView{

  function Home($user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->display('templates/home.tpl');
  }
  function AllMovies($user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->display('templates/AllMovies.tpl');
  }
  function Contacto($user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->display('templates/Contacto.tpl');
  }
  function Login($user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->display('templates/Login.tpl');
  }
  function Registrar($user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->display('templates/Registrar.tpl');
  }
  function Sugerencias($user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->display('templates/Sugerencias.tpl');
  }

  function MostrarAdmin ($user,$admin, $usuarios){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->assign('usuarios',$usuarios);
    $smarty->display('templates/Admin.tpl');
  }


}
 ?>

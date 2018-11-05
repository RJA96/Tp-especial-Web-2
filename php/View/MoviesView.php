<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class MoviesView{

  function MostrarPeliculas($Peliculas, $Generos, $user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->assign('Peliculas',$Peliculas);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/Peliculas-PDO.tpl');
  }

  function MostrarGeneros($Generos, $user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/Generos-PDO.tpl');
  }

  function MostrarEditar($Pelicula, $Generos, $user,$admin){
    $smarty = new Smarty();
    $smarty->assign('Pelicula',$Pelicula);
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/EditarPeli.tpl');
  }

  function MostrarEditarGenero($Generos, $user,$admin){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/EditarGenero.tpl');
  }

  function MostrarComentarios($user,$admin,$comentarios,$Pelicula){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('admin',$admin);
    $smarty->assign('comentarios',$comentarios);
    $smarty->assign('Pelicula',$Pelicula);
    $smarty->display('templates/Comentarios.tpl');
  }
}
?>

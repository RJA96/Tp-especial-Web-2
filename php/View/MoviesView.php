<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class MoviesView{

  function MostrarPeliculas($Peliculas, $Generos, $user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('Peliculas',$Peliculas);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/Peliculas-PDO.tpl');
  }

  function MostrarGeneros($Generos, $user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/Generos-PDO.tpl');
  }

  function MostrarEditar($Pelicula, $Generos){
    $smarty = new Smarty();
    $smarty->assign('Pelicula',$Pelicula);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/EditarPeli.tpl');
  }

  function MostrarEditarGenero($Generos){
    $smarty = new Smarty();
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/EditarGenero.tpl');
  }
}
?>

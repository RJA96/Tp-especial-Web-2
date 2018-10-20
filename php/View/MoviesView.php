<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class MoviesView{

  function MostrarPeliculas($Peliculas, $Generos){
    $smarty = new Smarty();
    $smarty->assign('Peliculas',$Peliculas);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/Peliculas-PDO.tpl');
  }

  function MostrarGeneros($Generos){
    $smarty = new Smarty();

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

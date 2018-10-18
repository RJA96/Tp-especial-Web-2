<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class MoviesView{

  function MostrarTabla($Peliculas, $Generos){
    $smarty = new Smarty();
    $smarty->assign('Peliculas',$Peliculas);
    $smarty->assign('Generos',$Generos);
    $smarty->display('templates/Test.tpl');
  }
}
?>

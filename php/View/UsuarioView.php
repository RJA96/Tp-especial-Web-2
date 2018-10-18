<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class UsuarioView
{

  function Mostrar($Titulo, $Usuarios){
    $smarty = new Smarty();
    $smarty->assign('Usuarios',$Usuarios);
    //$smarty->debugging = true;
    $smarty->display('templates/Usuarios.tpl');
  }
}

 ?>

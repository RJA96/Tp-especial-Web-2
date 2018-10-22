<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class UsuarioView
{

  function Home($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/home.tpl');
  }


}

 ?>

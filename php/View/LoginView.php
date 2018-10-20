<?php
class LoginView
{



  function mostrarLogin($user){
    $smarty = new Smarty();
    $smarty->assign('user',$user);
    $smarty->display('templates/Login.tpl');
  }
}

 ?>

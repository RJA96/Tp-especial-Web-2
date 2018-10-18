<?php
class LoginView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function mostrarLogin($message = ''){
    $this->Smarty->display('templates/Login.tpl');
  }
}

 ?>

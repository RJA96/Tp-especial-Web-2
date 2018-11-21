<?php

require_once  "php/View/LoginView.php";
require_once  "php/Model/UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
  }

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function verificarLogin(){
      $user = $_POST["usuarioId"];
      $clave = $_POST["passwordId"];
      $db_User = $this->model->getUser($user);

      if((isset($db_User))&&($user!=null)){
          if (password_verify($clave, $db_User[0]['clave'])){
              session_start();
              $_SESSION["User"] = $db_User[0]['id_usuario'];
              $_SESSION["Admin"] = $db_User[0]['admin'];
              header(HOME);
          }else{
            header(LOGIN);

          }
      }else{

        header(LOGIN);
      }
  }

  function LogearReg($user){
    $db_User = $this->model->getUser($user[0]);
    session_start();
     $_SESSION["User"] = $user[0];
     $_SESSION["Admin"] = $db_User[0]['admin'];
      header(HOME);

  }

}

 ?>

<?php

require_once  "php\View\LoginView.php";
require_once  "php\Model\UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function verificarLogin(){
      $user = $_POST["usuarioId"];
      $clave = $_POST["passwordId"];
      $dbUser = $this->model->getUser($user);

      if(isset($dbUser)){
          if (password_verify($pass, $dbUser[0]["pass"])){
              session_start();
              $_SESSION["User"] = $user;
              header(HOME);
          }else{
            $this->view->mostrarLogin("Contraseña incorrecta");

          }
      }else{

        $this->view->mostrarLogin("No existe el usario");
      }

  }

}

 ?>
 ?>

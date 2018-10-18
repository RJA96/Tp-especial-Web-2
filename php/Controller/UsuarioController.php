<?php
require_once  "php\View\UsuarioView.php";
require_once  "php\Model\UsuarioModel.php";
require_once  "php\Controller\SecuredController.php";

class UsuarioController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($Usuarios);
  }



  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $clave = $_POST["pass"];
    $this->model->InsertarUsuario($nombre,$email,$clave);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

}

 ?>

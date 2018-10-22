<?php
require_once  "php/View/UsuarioView.php";
require_once  "php/Model/UsuarioModel.php";
require_once  "php/Controller/SecuredController.php";

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
    $nombre = $_POST["usuario"];
    $email = $_POST["email"];
    $clave = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $this->model->InsertarUsuario($nombre,$email,$clave);

  }

}

 ?>

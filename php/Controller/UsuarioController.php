<?php
require_once  "php/Model/UsuarioModel.php";
require_once  "php/Controller/SecuredController.php";
require_once  "php/Controller/LoginController.php";

class UsuarioController extends SecuredController
{
  private $model;
  private $Titulo;
  private $movcontroller;
  function __construct()
  {
    parent::__construct();
    $this->model = new UsuarioModel();
    $this->login = new LoginController();
  }

  function InsertUsuario(){
    $nombre = $_POST["usuario"];
    $email = $_POST["email"];
    $clave = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $this->model->InsertarUsuario($nombre,$email,$clave);
    $this->login->LogearReg($nombre);
  }

}

 ?>

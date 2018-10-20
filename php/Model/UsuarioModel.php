<?php

class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_movies;charset=utf8'
    , 'root', '');
  }

  function GetUsuario(){

      $sentencia = $this->db->prepare( "SELECT * FROM usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }



  function InsertarUsuario($nombre,$email, $clave){

    $sentencia = $this->db->prepare("INSERT INTO usuario(usuario,email, clave) VALUES(?,?,?)");
    $sentencia->execute(array($nombre,$email, $clave));
  }

  function GetUser($user){

      $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE usuario=? LIMIT 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}
?>

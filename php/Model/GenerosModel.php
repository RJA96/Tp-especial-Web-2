<?php

class GenerosModel
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

  function getGenero(){
      $sentencia = $this->db->prepare( "select * from genero");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarGenero($nombre, $cantidad){
    $sentencia = $this->db->prepare("INSERT INTO genero(nombre, cantidad_peliculas) VALUES(?,?)");
    $sentencia->execute(array($nombre, $cantidad));
  }
}
?>

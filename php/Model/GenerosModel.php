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
  function getGeneroID($id){
    $sentencia = $this->db->prepare( "SELECT * FROM genero WHERE id_genero=?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function InsertarGenero($nombre, $cantidad){
    $sentencia = $this->db->prepare("INSERT INTO genero(nombre, cantidad_peliculas) VALUES(?,?)");
    $sentencia->execute(array($nombre, $cantidad));
  }
  function EditarGenero($id_genero, $nombre, $cantidad){
    $sentencia = $this->db->prepare("UPDATE genero SET nombre=?, cantidad_peliculas=? WHERE id_genero=?");
    $sentencia->execute(array($nombre, $cantidad, $id_genero));
  }


  function BorrarGenero($id_genero){

  $sentencia = $this->db->prepare( "DELETE from genero where id_genero=?");
  $sentencia->execute(array($id_genero));
  }
}
?>

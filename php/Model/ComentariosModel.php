<?php
class ComentariosModel{
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

  function GetComentariosPelicula($id){
    $sentencia = $this->db->prepare( "SELECT * FROM comentario WHERE id_pelicula=?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}
?>
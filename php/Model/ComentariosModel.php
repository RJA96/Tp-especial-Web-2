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
  
  
  function GetComentariosAll(){
    $sentencia = $this->db->prepare( "SELECT * FROM comentario");
    $sentencia->execute();
    return $sentencia->fetchall(PDO::FETCH_ASSOC);
  }


  function GetComentariosPelicula($id){
    $sentencia = $this->db->prepare( "SELECT * FROM comentario WHERE id_pelicula=?");
    $sentencia->execute(array($id));
    return $sentencia->fetchall(PDO::FETCH_ASSOC);
  }

  function InsertarComentario($coment,$idpelicula, $idusuario){
    $sentencia = $this->db->prepare("INSERT INTO comentario(coment, id_pelicula, id_usuario) VALUES(?,?,?)");
    $sentencia->execute(array($coment,$idpelicula, $idusuario));
  }

  function BorrarComentario($id){
    $sentencia = $this->db->prepare( "DELETE from comentario where id_comentario=?");
    $sentencia->execute(array($id));
  }
}
?>
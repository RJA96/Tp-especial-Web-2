<?php

class getMovies
{
    private $db;

    function __construct()
    {
      $this->db = $this->Connect();
    }
  
    function getGeneros(){

        $sentencia = $this->db->prepare( "select * from generos");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    function insertGenero($genero,$cantidad_peliculas){

        $sentencia = $this->db->prepare("INSERT INTO genero(genero, cantidad_peliculas ) VALUES(?,?)");
        $sentencia->execute(array($genero,$cantidad_peliculas));
      }
    
      function BorrarTarea($idTarea){
    
        $sentencia = $this->db->prepare( "delete from genero where id=?");
        $sentencia->execute(array($idGenero));
      }
    

}

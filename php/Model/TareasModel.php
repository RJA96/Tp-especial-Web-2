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
    function insertGenero($genero,$cantidadMovies){

        $sentencia = $this->db->prepare("INSERT INTO genero(genero, ) VALUES(?,?)");
        $sentencia->execute(array($genero,$cantidadMovies));
      }
    
      function BorrarTarea($idTarea){
    
        $sentencia = $this->db->prepare( "delete from genero where id=?");
        $sentencia->execute(array($idGenero));
      }
    

}

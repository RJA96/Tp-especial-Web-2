<?php

class MoviesModel{
    private $db;

    function __construct()
    {
      $this->db = $this->Connect();
    }

    
    function Conn(){
      $conn = new PDO("mysql:host=localhost;dbname=db_movies", $username, '');
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully"; 
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

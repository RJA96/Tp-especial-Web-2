<?php

class MoviesModel{
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
    function getPeliculas(){

        $sentencia = $this->db->prepare( "select * from pelicula");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

}

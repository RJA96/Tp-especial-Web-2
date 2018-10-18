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
    function InsertarPelicula($nombre, $año, $valoracion ,$duracion ,$genero){
      $sentencia = $this->db->prepare("INSERT INTO pelicula(nombre, año, valoracion, duracion, id_genero) VALUES(?,?,?,?,?)");
      $sentencia->execute(array($nombre, $año, $valoracion, $duracion, $id_genero));
    }

}

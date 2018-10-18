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
      $sentencia->execute(array($nombre, $año, $valoracion, $duracion, $genero));
    }
    function BorrarPeli($id_peli){
    $sentencia = $this->db->prepare( "DELETE from pelicula where id_peliculas=?");
    $sentencia->execute(array($id_peli));
    }

    function EditarPelicula($id, $nombre, $año, $valoracion ,$duracion ,$genero){
      $sentencia = $this->db->prepare(("UPDATE pelicula set nombre=?, año=?, valoracion=?, duracion=?, id_genero=? where id_peliculas=?)VALUES(?,?,?,?,?,?)");
      $sentencia->execute(array($nombre, $año, $valoracion, $duracion, $genero, $id));
    }

}

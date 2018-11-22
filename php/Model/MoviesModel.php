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

    function getPelicula($id){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula WHERE id_peliculas=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    function getPeliculasporGenero($id){
        $sentencia = $this->db->prepare( "SELECT * FROM pelicula WHERE id_genero=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarPelicula($nombre, $año, $valoracion, $duracion,$img, $genero){
      $path = $this->subirImagen($img);
      $sentencia = $this->db->prepare("INSERT INTO pelicula(nombre, año, valoracion, duracion, img, id_genero) VALUES(?,?,?,?,?,?)");
      $sentencia->execute(array($nombre, $año, $valoracion, $duracion, $path, $genero));
    }
    function BorrarPeli($id_peli){
    $sentencia = $this->db->prepare( "DELETE from pelicula where id_peliculas=?");
    $sentencia->execute(array($id_peli));
    }

    function EditarPelicula($nombre, $año, $valoracion ,$duracion ,$img,$id_genero, $id_pelicula){
      $path = $this->subirImagen($img);
      $sentencia = $this->db->prepare("UPDATE pelicula SET nombre=?,año=?,valoracion=?,duracion=?,img=?,id_genero=? WHERE id_peliculas=?");
      $sentencia->execute(array($nombre, $año, $valoracion, $duracion,$path, $id_genero, $id_pelicula));
    }
    private function subirImagen($imagen){
       $destino_final = 'IMGTEMP/' . uniqid() . '.jpg';
       echo "destino_final: ".$destino_final;
       move_uploaded_file($imagen, $destino_final);
       return $destino_final;
   }

}
?>

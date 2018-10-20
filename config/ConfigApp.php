<?php
  define('HOME', 'Location: home');
  define('CONTACTO', 'Location: Contacto');
  define('ALLMOVIES', 'Location: AllMovies');
  define('LOGIN', 'Location: Login');
  define('REGISTRAR', 'Location: Registrar');
  define('LOGOUT', 'Location: Logout');
  define('SUGERENCIAS', 'Location: Sugerencias');

  class ConfigApp{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=>'MoviesController#Home',
      'Home'=>'MoviesController#Home',
      'Contacto'=>'MoviesController#Contacto',
      'AllMovies'=>'MoviesController#AllMovies',
      'Login'=>'MoviesController#Login',
      'Logout'=>'MoviesController#Logout',
      'Registrar'=>'MoviesController#Registrar',
      'Sugerencias'=>'MoviesController#Sugerencias',
      'PDO'=>'MoviesController#MostrarPDOGeneros',
      'PDO-Pelicula'=>'MoviesController#MostrarPDOPeliculas',
      'borrarpelicula'=> 'MoviesController#BorrarPeli',
      'agregar_pelicula'=> 'MoviesController#InsertarPelicula',
      'mostrarparaeditarpelicula'=> 'MoviesController#MostrarPDOeditpelicula',
      'editpeli'=>  'MoviesController#EditarPelicula',
      'borrargenero'=> 'MoviesController#BorrarGenero',
      'agregar_genero'=> 'MoviesController#InsertarGenero',
      'mostrarparaeditargenero'=>'MoviesController#MostrarPDOeditgenero',
      'mostrarpeliculasporgenero'=>'MoviesController#MostrarPDOPeliculasporGenero',
      'editargenero'=>'MoviesController#EditarGenero',
    ];
  }
?>

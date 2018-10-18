<?php
  define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  define('CONTACTO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Contacto');
  define('ALLMOVIES', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/AllMovies');
  define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Login');
  define('REGISTRAR', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Registrar');
  define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Logout');
  define('SUGERENCIAS', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Sugerencias');

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
      'PDO'=>'MoviesController#MostrarPDO',
      'borrarpelicula'=> 'MoviesController#BorrarPeli',
      'agregar_pelicula'=> 'MoviesController#InsertarPelicula',
      'mostrarparaeditarpelicula'=> 'MoviesController#MostrarPDOedit',
      'editpeli'=>  'MoviesController#EditarPelicula'
    ];
  }
?>

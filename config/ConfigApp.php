<?php
  define('HOME', 'Location: //'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Home');
  define('LOGIN', 'Location: //'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/Login');
  define('PDO', 'Location: //'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/PDO');
  define('PDOPELICULA', 'Location://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/PDO-Pelicula');

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
      'verificarLogin'=>'LoginController#verificarLogin',
      'CrearUsuario'=>'UsuarioController#InsertUsuario',
      'Usuarios'=>'UsuarioController#MostrarUsuario',
      'Admin'=>'MoviesController#Admin'
    ];
  }
?>

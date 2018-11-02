<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'genero#GET'=> 'GenerosApiController#GetGenero',
      'genero#DELETE'=> 'GenerosApiController#DeleteGenero',
      'genero#POST'=> 'GenerosApiController#InsertGenero',
      'genero#PUT'=> 'GenerosApiController#UpdateGenero',
      'pelicula#GET'=> 'PeliculasApiController#GetPelicula',
      'pelicula#DELETE'=> 'PeliculasApiController#DeletePelicula',
      'pelicula#POST'=> 'PeliculasApiController#InsertPelicula',
      'pelicula#PUT'=> 'PeliculasApiController#UpdatePelicula'
    ];

}

 ?>

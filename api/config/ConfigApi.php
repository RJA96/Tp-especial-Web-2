<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'genero#GET'=> 'GenerosApiController#GetGenero',
      'genero#DELETE'=> 'GenerosApiController#DeleteGenero',
      'genero#POST'=> 'GenerosApiController#InsertGenero',
      'genero#PUT'=> 'UpdateGenero#UpdateTarea'
    ];

}

 ?>

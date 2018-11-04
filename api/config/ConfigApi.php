<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#GET'=> 'ComentariosApiController#GetComentarioPelicula',
      'comentario#DELETE'=> 'ComentariosApiController#DeleteComentario',
      'comentario#POST'=> 'ComentariosApiController#InsertComentario'
    ];

}

 ?>

<?php

/**
 *
 */
class TareasView
{

  function Mostrar($tarea){
    if ($tarea == "home"){
   ?>
   <!doctype html>
   <html lang="en">
    <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
     <link rel="stylesheet" href="../../css/estilos.css">

    </head>
    <header>
      <nav class="navbar navbar-dark bg-dark navbar-expand-md">
        <a class="navbar-brand">PeliWeb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse">
          <div class="navbar-nav">
            <a class="nav-item nav-link active home" href="#">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link all-movies" href="#">Todas las peliculas</a>
            <a class="nav-item nav-link sugerencias" href="#">Sugerencias</a>
            <a class="nav-item nav-link contacto" href="#">Contacto</a>
            <a class="nav-item nav-link login" href="#">Login</a>
          </div>
        </div>
      </nav>
    </header>
     <body>
       <div class="container use-ajax">
         <div class="row">
           <figure class="mt-5 mb-5 text-center col-12">
             <img src="img/logo.png" alt="">
           </figure>
         </div>
         <article class="row">
           <section class="mb-5 text-center col-12">
             <p>En esta página mostraremos películas que valen la pena ver con sus respectivos datos y con la opción de poder solicitar películas que no aparezcan, registrarse para enterarse de nuevas adicciones, enviar sugerencias para mejorar la página.</p>
             <p>En este sitio damos opción a ver todas las películas en la misma pantalla simplemente deslizando con el scroll en las cuales se encuentran películas de distintos géneros, Romance, Suspenso, Acción y Ciencia ficción.</p>
             <p>Bueno sin más los dejamos con un top 3 de películas recomendadas. Espero que disfruten la página.</p>
           </section>
         </article>
         <article class="row">
           <section class="text-center col-12 col-lg-4">
             <h1>Los Vengadores: Infinity War</h1>
             <img  class="rounded" src="img/avengers.jpg" alt="">
             <p>Titulo original: Avengers: Infinity War</p>
             <p>Año: 2018</p>
             <p>Duracion: 156 min.</p>
             <p>Siopsis: El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a sacrificarlo todo por un bien mayor. Capitán América e Ironman deberán limar sus diferencias, Black Panther apoyará con sus tropas desde Wakanda, Thor y los Guardianes de la Galaxia e incluso Spider-Man se unirán antes de que los planes de devastación y ruina pongan fin al universo. ¿Serán capaces de frenar el avance del titán del caos?</p>
           </section>
           <section class="text-center col-12 col-lg-4">
             <h1>Cada día</h1>
             <img  class="rounded" src="img/everyday.jpg" alt="">
             <p>Titulo original: Every Day</p>
             <p>Año: 2018</p>
             <p>Duración: 95 min.</p>
             <p>Sinopsis: Rhiannon es una adolescente de 16 años que se enamora de un misterioso espíritu llamado "A", que se despierta en un cuerpo diferente cada día. Sintiendo una enorme conexión, Rhiannon y A intentan verse, sin saber qué o quién les traerá el nuevo día. Cuanto más se enamoran el uno del otro, la idea de amar a alguien que es una persona diferente cada 24 horas empieza a pasarles factura, llevándoles a tomar una decisión que cambiará sus vidas para siempre.</p>
           </section>
           <section class="text-center col-12 col-lg-4">
             <h1>Busqueda Implacable</h1>
             <img class="rounded" src="img/busquedaimplacable.jpg" alt="">
             <p>Titulo original: Taken</p>
             <p>Año: 2008</p>
             <p>Duración: 93 min.</p>
             <p>Sinopsis: Bryan Mills (Liam Neeson) es un agente especial jubilado. Pero cuando su hija Kim (Maggie Grace) es secuestrada en París por una organización criminal albanokosovar, tendrá que volver a la acción para intentar salvarla. La banda se dedica a una red de trata de blancas, por lo que Mills sabe que sólo dispone de unas horas para conseguir rescatarla antes de que se pierda el rastro de su hija.</p>
           </section>
         </article>
       </div>
     </body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    // <script src="js/main.js"></script>
   </html>
   <?php
    }
   }
 }

  ?>

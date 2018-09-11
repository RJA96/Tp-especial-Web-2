<?php

/**
 *
 */
class TareasView
{

  function Mostrar($tarea){

   ?>
   <!doctype html>
   <html lang="en">
    <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
     <link rel="stylesheet" href="css/estilos.css">

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

    <?php
    if ($tarea == "home"){
    ?>

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

   </html>

   <?php
 }elseif ($tarea == "AllMovies"){
   ?>

   <body>
     <div class="container use-ajax">
       <article class="row mt-2 mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/300.jpg" alt="300">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: 300
           </p>
           <p>
             Año: 2006
           </p>
           <p>
             Duración: 117 min.
           </p>
           <p>
             Siopsis: Adaptación del cómic de Frank Miller (autor del cómic 'Sin City') sobre la famosa batalla de las Termópilas (480 a.C.). El objetivo de Jerjes, emperador de Persia, era la conquista de Grecia, lo que desencadenó las Guerras Médicas. Dada la gravedad de la situación, el rey Leónidas de Esparta (Gerard Butler) y 300 espartanos se enfrentaron a un ejército persa que era inmensamente superior.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/3msc.jpg" alt="3mcs">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: 3 metros sobre el cielo
           </p>
           <p>
             Año: 2010
           </p>
           <p>
             Duración: 120 min.
           </p>
           <p>
             Siopsis: En Barcelona, dos jóvenes que pertenecen a mundos opuestos se conocen. Ella, la dulce Babi (María Valverde), es una chica de clase alta que vive en un entorno tan protegido como poco excitante. Él, Hugo (Mario Casas), conocido como el duro "H", es un chico impulsivo e irresponsable, aficionado a las peleas y a las carreras ilegales de motos. Esta es la crónica de un amor inicialmente imposible que arrastrará a ambos a un frenético viaje iniciático a través del cual descubrirán el amor.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/avatar.jpg" alt="Avatar">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Avatar
           </p>
           <p>
             Año: 2009
           </p>
           <p>
             Duración: 161 min.
           </p>
           <p>
             Siopsis: Año 2154. Jake Sully , un ex-marine condenado a vivir en una silla de ruedas, sigue siendo, a pesar de ello, un auténtico guerrero. Precisamente por ello ha sido designado para ir a Pandora, donde algunas empresas están extrayendo un mineral extraño que podría resolver la crisis energética de la Tierra. Para contrarrestar la toxicidad de la atmósfera de Pandora, se ha creado el programa Avatar, gracias al cual los seres humanos mantienen sus conciencias unidas a un avatar: un cuerpo biológico controlado de forma remota que puede sobrevivir en el aire letal. Esos cuerpos han sido creados con ADN humano, mezclado con ADN de los nativos de Pandora, los Na'vi. Convertido en avatar, Jake puede caminar otra vez. Su misión consiste en infiltrarse entre los Na'vi, que se han convertido en el mayor obstáculo para la extracción del mineral. Pero cuando Neytiri, una bella Na'vi, salva la vida de Jake, todo cambia: Jake, tras superar ciertas pruebas, es admitido en su clan. Mientras tanto, los hombres esperan los resultados de la misión de Jake.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/avengers.jpg" alt="Avengers">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Avengers: Infinity War
           </p>
           <p>
             Año: 2018
           </p>
           <p>
             Duración: 156 min.
           </p>
           <p>
             Siopsis: El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a sacrificarlo todo por un bien mayor. Capitán América e Ironman deberán limar sus diferencias, Black Panther apoyará con sus tropas desde Wakanda, Thor y los Guardianes de la Galaxia e incluso Spider-Man se unirán antes de que los planes de devastación y ruina pongan fin al universo. ¿Serán capaces de frenar el avance del titán del caos?
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/Bajolamismaestrella.png" alt="Bajolamismaestrella">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: The Fault in Our Stars
           </p>
           <p>
             Año: 2014
           </p>
           <p>
             Duración: 125 min.
           </p>
           <p>
             Siopsis: A pesar de que un milagro médico ha conseguido reducir su tumor y darle unos años más de vida, la adolescente Hazel (Shailene Woodley) siempre se ha considerado una enferma terminal. Sin embargo, cuando el joven Gus (Ansel Elgort) entra a formar parte del grupo de ayuda para enfermos de cáncer juvenil, la vida de Hazel se transforma por completo.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/busquedaimplacable.jpg" alt="busquedaimplacable">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Taken
           </p>
           <p>
             Año: 2008
           </p>
           <p>
             Duración: 93 min.
           </p>
           <p>
             Siopsis: Bryan Mills (Liam Neeson) es un agente especial jubilado. Pero cuando su hija Kim (Maggie Grace) es secuestrada en París por una organización criminal albanokosovar, tendrá que volver a la acción para intentar salvarla. La banda se dedica a una red de trata de blancas, por lo que Mills sabe que sólo dispone de unas horas para conseguir rescatarla antes de que se pierda el rastro de su hija.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/cartasajulieta.jpg" alt="cartasajulieta">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Letters to Juliet
           </p>
           <p>
             Año: 2010
           </p>
           <p>
             Duración: 105 min.
           </p>
           <p>
             Siopsis: Sophie (Amanda Seyfried) y Víctor (Gael García Bernal), una pareja que está de vacaciones en Italia, recibe una carta dirigida a una tal Julieta. La remitente es Claire (Vanessa Redgrave), una mujer que trata de localizar a Lorenzo (Franco Nero), un hombre con el que vivió en Italia, en su juventud, una aventura. Sophie emprenderá entonces un viaje por la Toscana para encontrar al antiguo amor de Claire.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/contratiempo.jpg" alt="contratiempo">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Contratiempo
           </p>
           <p>
             Año: 2016
           </p>
           <p>
             Duración: 104 min.
           </p>
           <p>
             Siopsis: Adrián Doria, un joven y exitoso empresario, despierta en la habitación de un hotel junto al cadáver de su amante. Acusado de asesinato, decide contratar los servicios de Virginia Goodman, la mejor preparadora de testigos del país. En el transcurso de una noche, asesora y cliente trabajarán para encontrar una duda razonable que le libre de la cárcel.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/crepusculo.jpg" alt="crepusculo">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Twilight
           </p>
           <p>
             Año: 2008
           </p>
           <p>
             Duración: 122 min.
           </p>
           <p>
             Siopsis:  La joven Bella Swan (Kristen Stewart) siempre fue una chica muy diferente ya en sus años de niña en Phoenix. Cuando su madre se volvió a casar, la mandó a vivir con su padre, a la pequeña y lluviosa ciudad de Forks, Washington, una población sin ningún aliciente para Bella. Pero entonces conoce en el instituo al misterioso y atractivo Edward Cullen (Robert Pattinson), un joven distinto a los demás que esconde un secreto.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/deadpool.jpg" alt="deadpool">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Deadpool
           </p>
           <p>
             Año: 2016
           </p>
           <p>
             Duración: 106 min.
           </p>
           <p>
             Siopsis: Basado en el anti-héroe menos convencional de la Marvel, Deadpool narra el origen de un ex-operativo de la fuerzas especiales llamado Wade Wilson, reconvertido a mercenario, y que tras ser sometido a un cruel experimento adquiere poderes de curación rápida, adoptando Wade entonces el alter ego de Deadpool. Armado con sus nuevas habilidades y un oscuro y retorcido sentido del humor, Deadpool intentará dar caza al hombre que casi destruye su vida.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/divergente.jpg" alt="divergente">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Divergent
           </p>
           <p>
             Año: 2014
           </p>
           <p>
             Duración: 140 min.
           </p>
           <p>
             Siopsis: En un mundo distópico en el que la sociedad se divide en cinco categorías (Verdad, Abnegación, Osadía, Cordialidad y Erudición), los jóvenes deben elegir, atendiendo a sus virtudes personales más destacadas, a qué facción pertenecer. Beatrice sorprende a los suyos con su decisión, pero ella no es como los demás: guarda un secreto del que podría depender el orden social e incluso su propia vida.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/durodematar.jpg" alt="durodematar">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Die Hard
           </p>
           <p>
             Año: 1988
           </p>
           <p>
             Duración: 131 min.
           </p>
           <p>
             Siopsis: En lo alto de la ciudad de Los Ángeles, un grupo terrorista se ha apoderado de un edificio tomando a un grupo de personas como rehenes. Sólo un hombre, el policía de Nueva York John McClane (Bruce Willis), ha conseguido escapar del acoso terrorista. Aunque está solo y fuera de servicio, McClane se enfrentará a los secuestradores. Él es la única esperanza para los rehenes.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/elcirculo.jpg" alt="elcirculo">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: The Circle
           </p>
           <p>
             Año: 2017
           </p>
           <p>
             Duración: 110 min.
           </p>
           <p>
             Siopsis: El día que Mae Holland es contratada para trabajar en el Círculo, la empresa de internet más influyente del mundo, sabe que se le ha concedido la oportunidad de su vida. A través de un innovador sistema operativo, el Círculo unifica direcciones de email, perfiles de redes sociales, operaciones bancarias y contraseñas de usuarios dando lugar a una única identidad virtual y veraz, en pos de una nueva era marcada por la transparencia.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/elefectomariposa1.jpg" alt="elefectomariposa1">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: The Butterfly Effect
           </p>
           <p>
             Año: 2004
           </p>
           <p>
             Duración: 113 min.
           </p>
           <p>
             Siopsis: Evan Treborn, un joven que se está esforzando por superar unos dolorosos recuerdos de su infancia, descubre una técnica que le permite viajar atrás en el tiempo y ocupar su cuerpo de niño para poder cambiar el curso de su dolorosa historia. Sin embargo también descubre que cualquier mínimo cambio en el pasado altera enormemente su futuro.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/elorigen.jpg" alt="elorigen">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Inception
           </p>
           <p>
             Año: 2010
           </p>
           <p>
             Duración: 148 min.
           </p>
           <p>
             Siopsis: Dom Cobb (DiCaprio) es un experto en el arte de apropiarse, durante el sueño, de los secretos del subconsciente ajeno. La extraña habilidad de Cobb le ha convertido en un hombre muy cotizado en el mundo del espionaje, pero también lo ha condenado a ser un fugitivo y, por consiguiente, a renunciar a llevar una vida normal. Su única oportunidad para cambiar de vida será hacer exactamente lo contrario de lo que ha hecho siempre: la incepción, que consiste en implantar una idea en el subconsciente en lugar de sustraerla. Sin embargo, su plan se complica debido a la intervención de alguien que parece predecir cada uno de sus movimientos, alguien a quien sólo Cobb podrá descubrir.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/everyday.jpg" alt="everyday">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Every Day
           </p>
           <p>
             Año: 2018
           </p>
           <p>
             Duración: 95 min.
           </p>
           <p>
             Siopsis: Rhiannon es una adolescente de 16 años que se enamora de un misterioso espíritu llamado "A", que se despierta en un cuerpo diferente cada día. Sintiendo una enorme conexión, Rhiannon y A intentan verse, sin saber qué o quién les traerá el nuevo día. Cuanto más se enamoran el uno del otro, la idea de amar a alguien que es una persona diferente cada 24 horas empieza a pasarles factura, llevándoles a tomar una decisión que cambiará sus vidas para siempre.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/fragmentado.jpg" alt="fragmentado">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Split
           </p>
           <p>
             Año: 2016
           </p>
           <p>
             Duración: 116 min
           </p>
           <p>
             Siopsis: A pesar de que Kevin (James McAvoy) le ha demostrado a su psiquiatra de confianza, la Dra. Fletcher (Betty Buckley), que posee 23 personalidades diferentes, aún queda una por emerger, decidida a dominar a todas las demás. Obligado a raptar a tres chicas adolescentes encabezadas por la decidida y observadora Casey (Anya Taylor-Joy), Kevin lucha por sobrevivir contra todas sus personalidades y la gente que le rodea, a medida que las paredes de sus compartimentos mentales se derrumban.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/identidad.jpg" alt="identidad">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: The Bourne Identity
           </p>
           <p>
             Año: 2002
           </p>
           <p>
             Duración: 113 min.
           </p>
           <p>
             Siopsis: Un hombre amnésico es rescatado por la tripulación de un barco pesquero italiano cuando flota a la deriva en el mar. No lleva nada consigo. Sólo las balas que lleva clavadas en la espalda y un número de cuenta de un banco suizo que lleva adherido a la cadera. Carece de identidad y de pasado, pero posee unas serie de talentos extraordinarios en artes lingüísticas, marciales y de autodefensa que sugieren una profesión de riesgo. Confuso y desorientado, emprende una frenética búsqueda para descubrir quién es y por qué su vida ha tomado un giro tan peligroso.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/johnwick.jpg" alt="johnwick">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: John Wick
           </p>
           <p>
             Año: 2014
           </p>
           <p>
             Duración: 101 min.
           </p>
           <p>
             Siopsis: En Nueva York, John Wick, un asesino a sueldo retirado, vuelve otra vez a la acción para vengarse de los gángsters que le quitaron todo.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/lateoriadeltodo.jpg" alt="lateoriadeltodo">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: The Theory of Everything
           </p>
           <p>
             Año: 2014
           </p>
           <p>
             Duración: 123 min.
           </p>
           <p>
             Siopsis: Narra la relación entre el célebre astrofísico Stephen Hawking y su primera mujer, Jane, desde que ambos se conocieron siendo estudiantes en la Universidad de Cambridge a principios de los 60 y a lo largo de 25 años, especialmente en su lucha juntos contra la enfermedad degenerativa que postró al famoso científico en una silla de ruedas.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/losvengadores.jpg" alt="losvengadores">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: The Avengers
           </p>
           <p>
             Año: 2012
           </p>
           <p>
             Duración: 135 min.
           </p>
           <p>
             Siopsis: Cuando un enemigo inesperado surge como una gran amenaza para la seguridad mundial, Nick Fury, director de la Agencia SHIELD, decide reclutar a un equipo para salvar al mundo de un desastre casi seguro. Adaptación del cómic de Marvel "Los Vengadores", el legendario grupo de superhéroes formado por Ironman, Hulk, Thor y el Capitán América entre otros.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/misionimposible.jpg" alt="misionimposible">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Mission: Impossible
           </p>
           <p>
             Año: 1996
           </p>
           <p>
             Duración: 110 min.
           </p>
           <p>
             Siopsis: Ethan Hunt es un superespía capaz de llevar a cabo la misión más peligrosa con la máxima eficacia y elegancia. Forma parte de un competente equipo dirigido por el agente Jim Phelps, que ha vuelto a reunir a sus hombres para participar en una dificilísima misión: evitar la venta de un disco robado que contiene información secreta de vital importancia.
           </p>
         </section>
       </article>

       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/narnia.jpg" alt="narnia">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: The Chronicles of Narnia: The Lion, The Witch and the Wardrobe
           </p>
           <p>
             Año: 2005
           </p>
           <p>
             Duración: 140 min.
           </p>
           <p>
             Siopsis: La historia narra las aventuras de cuatro hermanos: Lucy, Edmund, Susan y Peter que, durante la Segunda Guerra Mundial, descubren el mundo de Narnia, al que acceden a través de un armario mágico mientras juegan al escondite en la casa de campo de un viejo profesor. En Narnia descubrirán un mundo increíble habitado por animales que hablan, duendes, faunos, centauros y gigantes al que la Bruja Blanca- Jadis- ha condenado al invierno eterno. Con la ayuda del león Aslan, el noble soberano, los niños lucharán para vencer el poder que la Bruja Blanca ejerce sobre Narnia en una espectacular batalla y conseguir así liberarle de la maldición del frío.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/psicosis.jpg" alt="psicosis">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Psycho
           </p>
           <p>
             Año: 1998
           </p>
           <p>
             Duración: 104 min.
           </p>
           <p>
             Siopsis: Huyendo de la justicia, Marion Crane se refugia en el motel de Norman Bates, un hombre oscuro cuyas víctimas van cayendo en las misteriosas redes de su madre. Marion será la próxima. Su desaparición hará que su hermana y un detective privado emprendan su búsqueda. Remake del clásico de Hitchcock.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/readyplayerone.jpg" alt="readyplayerone">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Ready Player One
           </p>
           <p>
             Año: 2018
           </p>
           <p>
             Duración: 140 min.
           </p>
           <p>
             Siopsis: Año 2045. Wade Watts es un adolescente al que le gusta evadirse del cada vez más sombrío mundo real a través de una popular utopía virtual a escala global llamada "Oasis". Un día, su excéntrico y multimillonario creador muere, pero antes ofrece su fortuna y el destino de su empresa al ganador de una elaborada búsqueda del tesoro a través de los rincones más inhóspitos de su creación. Será el punto de partida para que Wade se enfrente a jugadores, poderosos enemigos corporativos y otros competidores despiadados, dispuestos a hacer lo que sea, tanto dentro de "Oasis" como del mundo real, para hacerse con el premio.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/starwars1.jpg" alt="starwars1">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Star Wars. Episode I: The Phantom Menace
           </p>
           <p>
             Año: 1999
           </p>
           <p>
             Duración: 130 min.
           </p>
           <p>
             Siopsis: Ambientada treinta años antes que "La guerra de las galaxias" (1977), muestra la infancia de Darth Vader, el pasado de Obi-Wan Kenobi y el resurgimiento de los Sith, los caballeros Jedi dominados por el Lado Oscuro. La Federación de Comercio ha bloqueado el pequeño planeta de Naboo, gobernado por la joven Reina Amidala; se trata de un plan ideado por Sith Darth Sidious, que, manteniéndose en el anonimato, dirige a los neimoidianos, que están al mando de la Federación. El Jedi Qui-Gon Jinn y su aprendiz Obi-Wan Kenobi convencen a Amidala para que vaya a Coruscant, la capital de la República y sede del Consejo Jedi, y trate de neutralizar esta amenaza. Pero, al intentar esquivar el bloqueo, la nave real resulta averiada, viéndose así obligada la tripulación a aterrizar en el desértico y remoto planeta de Tatooine.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/troya.jpg" alt="troya">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Troy
           </p>
           <p>
             Año: 2004
           </p>
           <p>
             Duración: 163 min.
           </p>
           <p>
             Siopsis: En el año 1193 a. C., Paris (Orlando Bloom), hijo de Príamo y príncipe de Troya, rapta a Helena (Diane Kruger), esposa de Menelao, el rey de Esparta, lo que desencadena la Guerra De Troya, en la que se enfrentan griegos y troyanos. El ejército griego asedió la ciudad de Troya durante más de diez años. Aquiles (Brad Pitt) era el gran héroe de los griegos, mientras Héctor (Eric Bana), el hijo mayor de Príamo (Peter O'Toole), el rey de Troya, representaba la única esperanza de salvación para la ciudad.
           </p>
         </section>
       </article>
       <article class="row mb-2">
         <figure class="col-12 float-lg-left col-lg-4">
           <img src="img/yoantesdeti.jpg" alt="yoantesdeti">
         </figure>
         <section class="col-12 float-lg-left col-lg-8">
           <p>
             Titulo original: Me Before You
           </p>
           <p>
             Año: 2016
           </p>
           <p>
             Duración: 110 min.
           </p>
           <p>
             Siopsis: Louisa “Lou” Clark (Emilia Clarke), una chica inestable y creativa, reside en un pequeño pueblo de la campiña inglesa. Vive sin rumbo y va de un trabajo a otro para ayudar a su familia a llegar a fin de mes. Sin embargo, un nuevo trabajo pondrá a prueba su habitual alegría. En el castillo local, se ocupa de cuidar y acompañar a Will Traynor (Sam Claflin), un joven y rico banquero que se quedó paralítico tras un accidente.
           </p>
         </section>
       </article>
       <article class="row">
         <section class="col-12">
           <p>Listado completo de texto de todas las películas que se encuentran en el sitio.</p>
           <ul>
             <li>300</li>
             <li>3 metros sobre el cielo</li>
             <li>Avatar</li>
             <li>Avengers: Infinity War</li>
             <li>The Fault in Our Stars</li>
             <li>Taken</li>
             <li>Letters to Juliet</li>
             <li>Contratiempo</li>
             <li>Twilight</li>
             <li>Deadpool</li>
             <li>Divergent</li>
             <li>Die Hard</li>
             <li>The Circle</li>
             <li>The Butterfly Effect</li>
             <li>Inception</li>
             <li>Every Day</li>
             <li>Split</li>
             <li>The Bourne Identity</li>
             <li>John Wick</li>
             <li>The Theory of Everything</li>
             <li>The Avengers</li>
             <li>Mission: Impossible</li>
             <li>The Chronicles of Narnia: The Lion, The Witch and the Wardrobe</li>
             <li>Psycho</li>
             <li>Ready Player One</li>
             <li>Star Wars. Episode I: The Phantom Menace</li>
             <li>Troy</li>
             <li>Me Before You</li>
           </ul>
         </section>
       </article>
       <article class="row mt-2">
           <div class="col-3">
             <p>Filtrar por genero:</p>
           </div>
           <div class=" col-3">
             <select class="form-control filtro fil">
               <option value="Todas" selected>Todas</option>

             </select>
           </div>
           <div class="col-3 mb-2">
             <button type="button" class="btn btn-dark filtrar" name="Filtro">Filtrar</button>
           </div>
       </article>

       <article class="row">
         <section class="col-12">
           <table class="table table-striped table-dark">
             <thead>
               <tr>
                 <th scope="col">Check</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Genero</th>
                 <th scope="col">Año</th>
                 <th scope="col">Valoracion</th>
                 <th scope="col">Duración</th>
               </tr>
             </thead>
             <tbody class="peliculas">

             </tbody>
           </table>
         </section>
       </article>

       <article class="row">
         <section class="col-12 mb-2">
           <form>
             <section class="mt-2 form-group">
               <input type="text" class="form-control Nombre" placeholder="Nombre"name="" value="">
               <input type="text" class="form-control Genero" placeholder="Genero"name="" value="">
               <input type="number" class="form-control Año" placeholder="Año"name="" value="">
               <input type="text" class="form-control Valoracion" placeholder="Valoración"name="" value="">
               <input type="text" class="form-control Duracion" placeholder="Duración"name="" value="">
             </section>
             <section class="form-group mb-2">
               <button type="button" class="btn btn-dark upload" name="Upload">Upload</button>
               <button type="button" class="btn btn-dark uploadx3" name="Uploadx3">Upload x3</button>
               <button type="button" class="btn btn-dark edit" name="Edit">Edit</button>
               <button type="button" class="btn btn-dark delete" name="Delate">Delete</button>
             </section>
           </form>
         </section>
       </article>
     </div>
   </body>

<?php
}elseif ($tarea == "Contacto") {
 ?>

 <body>
   <div class="container use-ajax">
     <article class="row">
       <section class="col-12">
         <form>
           <section class="mt-5 form-row">
               <div class="col">
                 <label>Nombre</label>
                 <input type="text" class="form-control" placeholder="Nombre">
               </div>
               <div class="col">
                 <label>Apellido</label>
                 <input type="text" class="form-control" placeholder="Apellido">
               </div>
           </section>
           <section class=" form-row">
             <div class="col">
             <label>Numero de telefono</label>
             <input type="text" class="form-control" placeholder="Num. de telefono">
             </div>
             <div class="col">
             <label>Email</label>
             <input type="email" class="form-control" placeholder="Email">
             </div>
           </section>
           <section class="form-group mt-4">
             <button type="submit" class="btn btn-dark">Enviar</button>
           </section>
         </form>
       </section>
     </article>
   </div>
 </body>

<?php
}elseif ($tarea == "Login") {
 ?>

 <body>
   <div class="container use-ajax">
     <article class="row">
       <section class="col-12">
         <form>
           <section class="mt-5 form-group">
             <label>Usuario</label>
             <input type="text" class="form-control" placeholder="Usuario">
           </section>
           <section class="form-group">
             <label>Contraseña</label>
             <input type="password" class="form-control" placeholder="Contraseña">
           </section>
           <section class="form-group">
             <button type="submit" class="btn btn-dark">Login</button>
           </section>
         </form>
       </section>
     </article>
     <article class="row">
       <section class="col-12">
         <a class="registrarse" href="#" class="">Registrarse</a>
       </section>
     </article>
   </div>
 </body>

 <?php
}elseif ($tarea == "Registrar") {
  ?>

  <body>
    <div class="container use-ajax">
      <article class="row">
        <section class="col-12">
          <form>
            <section class="mt-5 form-group">
              <label>Usuario</label>
              <input type="text" class="form-control" placeholder="Usuario">
            </section>
            <section class="form-row">
                <section class="col">
                  <label>Nombre</label>
                  <input type="text" class="form-control" placeholder="Nombre">
                </section>
                <section class="col">
                  <label>Apellido</label>
                  <input type="text" class="form-control" placeholder="Apellido">
                </section>
            </section>
            <section class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email">
            </section>
            <section class="form-group">
              <section class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" value="Masculino">
                <label class="form-check-label" for="inlineRadio1">Masculino</label>
              </section>
              <section class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" value="Femenino">
                <label class="form-check-label" for="inlineRadio2">Femenino</label>
              </section>
            </section>
            <section class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control" placeholder="Contraseña">
            </section>
            <section class="form-group">
              <button type="submit" class="btn btn-dark">Registrarse</button>
            </section>
          </form>
        </section>
      </article>
    </div>
  </body>

  <?php
}elseif ($tarea == "Sugerencias") {
   ?>

   <body>
     <div class="container use-ajax">
       <article class="mt-5 row">
         <div class="text-center col-12">
           <p>En este espacio los invitamos a sugerir cambios, solicitar películas, dar su opinión. Todo es bienvenido.</p>
           <p>Muchas gracias.</p>
         </div>
       </article>
       <article class="row">
         <section class="col-12">
           <form>
             <section class="mt-2 form-row">
                 <section class="col">
                   <label>Nombre</label>
                   <input type="text" class="form-control" placeholder="Nombre">
                 </section>
                 <section class="col">
                   <label>Apellido</label>
                   <input type="text" class="form-control" placeholder="Apellido">
                 </section>
             </section>
             <section class="form-group">
               <label>Numero de telefono</label>
               <input type="text" class="form-control" placeholder="Num. de telefono">
             </section>
             <section class="form-group">
               <label for="Sugerencias">Sugerencias</label>
               <textarea class="form-control">Sugerencias</textarea>
             </section>
             <section class="form-group">
               <button type="submit" class="btn btn-dark">Enviar</button>
             </section>
           </form>
         </section>
       </article>
     </div>
   </body>

  <?php
    }
   }
 }
  ?>

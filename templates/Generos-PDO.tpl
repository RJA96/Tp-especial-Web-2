{include file="Header.tpl"}



  <section class="col-6">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidad de Peliculas</th>
          <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
          <th scope="col">Ver Peliculas</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Generos item=gen}
        <tr>
          <th scope="row">{$gen['nombre_genero']}</th>
          <th scope="row">{$gen['cantidad_peliculas']}</th>
          <th><a href="borrargenero/{$gen['id_genero']}">Borrar</a></th>
          <th><a href="mostrarparaeditargenero/{$gen['id_genero']}">Editar</a></th>
          <th><a href="mostrarpeliculasporgenero/{$gen['id_genero']}">Ver Peliculas</a></th>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </section>

  <article class="row">
    <section class="col-12 mb-2">
      <form method="post" action="agregar_genero">
        <section class="mt-2 form-group">
          <input type="text" class="form-control" id="Nombre" placeholder="Nombre"name="Nombre" value="">
          <input type="number" class="form-control" id="cantidad_peliculas" placeholder="cantidad_peliculas"name="cantidad_peliculas" value="">
        <section class="form-group mb-2">
          <button type="submit" class="btn btn-dark upload" name="Upload">Upload</button>
        </section>
      </form>
    </section>
  </article>


{include file="Footer.tpl"}

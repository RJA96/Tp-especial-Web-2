{include file="Header.tpl"}



  <section class="mx-auto mt-2 col-8">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidad de Peliculas</th>
          {if $user != null}
          <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
          {/if}
          <th scope="col">Ver Peliculas</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Generos item=gen}
        <tr>
          <th scope="row">{$gen['nombre_genero']}</th>
          <th scope="row">{$gen['cantidad_peliculas']}</th>
          {if $user != null}
          <th><a href="borrargenero/{$gen['id_genero']}">Borrar</a></th>
          <th><a href="mostrarparaeditargenero/{$gen['id_genero']}">Editar</a></th>
          {/if}
          <th><a href="mostrarpeliculasporgenero/{$gen['id_genero']}">Ver Peliculas</a></th>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </section>
{if $user != null}
  <article class="row">
    <section class="mx-auto col-6 mb-2">
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
{/if}

{include file="Footer.tpl"}

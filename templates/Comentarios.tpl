{if $user != null}
{include file="HeaderLogout.tpl"}
{if $admin == "1"}
<button class="d-none admin" data="admin" data-nombre="{$user}"></button>
{/if}
{else}
{include file="Header.tpl"}
<button class="d-none admin" data="noadmin"data-nombre="{$user}"></button>
{/if}

<section class="mx-auto mt-2 col-8">
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Año</th>
        <th scope="col">Valoracion</th>
        <th scope="col">Duracion</th>
        <th scope="col">Genero</th>
        {if $user != null}
        {if $admin == "1"}
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
        {/if}
        {/if}
        <th scope="col">Imagen</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$Peliculas item=peli}
      <tr>
        <td scope="row">{$peli['nombre']}</td>
        <td scope="row">{$peli['año']}</td>
        <td scope="row">{$peli['valoracion']}</td>
        <td scope="row">{$peli['duracion']}</td>
        <td class="d-none" id = "id_p" data="{$peli['id_peliculas']}">{$peli['id_peliculas']}</td>
        {foreach from=$Generos item=gen}
          {if $peli['id_genero'] == $gen['id_genero']}
            <th scope="row"><a href="mostrarpeliculasporgenero/{$gen['id_genero']}">{$gen['nombre_genero']}</a></th>
          {/if}
        {/foreach}
        {if $user != null}
        {if $admin == "1"}
        <td><a href="borrarpelicula/{$peli['id_peliculas']}">Borrar</a></th>

        <td><a href="mostrarparaeditarpelicula/{$peli['id_peliculas']}">Editar</a></th>
        {/if}
        {/if}
        <td><img src="{$peli['img']}"width="100" height="150"></td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</section>
<section class="mx-auto col-8">
<button type="button" class="Coment btn btn-dark upload mx-auto"name="Coment">Ver Comentarios</button>
</section>
<section class="Comentarios mx-auto mt-2 col-8">


</section>
{if $user != null}
<form method="POST">
  <section class="mt-2 mx-auto form-group col-4">
    <input class=" form-control comentario" placeholder="Comentario" type="text" name="" value="">
    <section class="mt-2 form-group col-6">
    <select class="puntaje-js form-control" name="">
      <option class="d-none" value="">Puntaje</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    </section>
  <section class="form-group mb-2">
    <button type="button" class="comentario-js btn btn-dark"name="button">Subir Comentario</button>

  </section>
</form>
{/if}

{include file="Footer.tpl"}

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
        <td><img src="{$peli['imagen']}"></td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</section>
<section class="mx-auto">
<button type="button" class="Coment btn btn-dark upload mx-auto col-3"name="Coment">Ver Comentarios</button>
</section>
<section class="Comentarios mx-auto mt-2 col-8">


</section>
{if $user != null}
<form method="POST">
  <section class="mt-2 form-group">
    <input class=" form-control comentario col-5" placeholder="Comentario" type="text" name="" value="">
  <section class="form-group mb-2">
    <button type="button" class="comentario-js"name="button">Subir</button>

  </section>
</form>
{/if}

{include file="Footer.tpl"}

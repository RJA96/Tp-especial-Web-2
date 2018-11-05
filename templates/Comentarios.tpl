{if $user != null}
{include file="HeaderLogout.tpl"}
{else}
{include file="Header.tpl"}
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
        <th scope="col">Comentarios</th>
        {if $user != null}
        {if $admin == "1"}
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
        {/if}
        {/if}
      </tr>
    </thead>
    <tbody>
      {foreach from=$Peliculas item=peli}
      <tr>
        <th scope="row">{$peli['nombre']}</th>
        <th scope="row">{$peli['año']}</th>
        <th scope="row">{$peli['valoracion']}</th>
        <th scope="row">{$peli['duracion']}</th>
        {foreach from=$Generos item=gen}
          {if $peli['id_genero'] == $gen['id_genero']}
            <th scope="row"><a href="mostrarpeliculasporgenero/{$gen['id_genero']}">{$gen['nombre_genero']}</a></th>
          {/if}
        {/foreach}
        {if $user != null}
        {if $admin == "1"}
        <th><a href="borrarpelicula/{$peli['id_peliculas']}">Borrar</a></th>
        <th><a href="mostrarparaeditarpelicula/{$peli['id_peliculas']}">Editar</a></th>
        {/if}
        {/if}
        <th><img src="{$peli['imagen']}"
      </tr>
      {/foreach}
    </tbody>
  </table>
</section>


{include file="Footer.tpl"}

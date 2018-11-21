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
          <th><a href="vercomentarios/{$peli['id_peliculas']}">Comentarios</a></th>
          {if $user != null}
          {if $admin == "1"}
          <th><a href="borrarpelicula/{$peli['id_peliculas']}">Borrar</a></th>
          <th><a href="mostrarparaeditarpelicula/{$peli['id_peliculas']}">Editar</a></th>
          {/if}
          {/if}
        </tr>
        {/foreach}
      </tbody>
    </table>
  </section>
{if $user != null}
{if $admin == "1"}
  <article class="row">
    <section class="mx-auto col-6 mb-2">
      <form method="post" action="agregar_pelicula">
        <section class="mt-2 form-group">
          <input type="text" class="form-control" placeholder="Nombre"id="Nombre_peli"name="Nombre_peli" value="">
          <input type="number" class="form-control" placeholder="Año"id="Año"name="Año" value="">
          <input type="number" class="form-control" placeholder="Valoración"id="Valoracion"name="Valoracion" value="">
          <input type="number" class="form-control" placeholder="Duración"id="Duracion"name="Duracion" value="">
          <input type="text" class="form-control" placeholder="Img"id="Img"name="Img" value="">
          <select class="form-control" id="genero"  name="genero">
                     {foreach from=$Generos item=gen}
                     <option class="dropdown-item" value="{$gen['id_genero']}" name="categoria">{$gen['nombre_genero']}</a>
                       {/foreach}
                   </select>
        </section>
        <section class="form-group mb-2">
          <button type="submit" class="btn btn-dark upload" name="Upload">Upload</button>

        </section>
      </form>
    </section>
  </article>
{/if}
{/if}


{include file="Footer.tpl"}

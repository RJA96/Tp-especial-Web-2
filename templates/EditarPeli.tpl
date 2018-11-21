{if $user != null}
{include file="HeaderLogout.tpl"}
{if $admin == "1"}
<button class="d-none admin" data="admin" data-nombre="{$user}"></button>
{/if}
{else}
{include file="Header.tpl"}
<button class="d-none admin" data="noadmin"data-nombre="{$user}"></button>
{/if}

<article class="row">
  <section class="col-12 mb-2">
    <form method="post" action="editpeli">
      <section class="mt-2 form-group">
        <input type="hidden" class="form-control" placeholder="Nombre"id="id_peli"name="id_peli" value="{$Pelicula[0]['id_peliculas']}">
        <input type="text" class="form-control" placeholder="Nombre"id="Nombre_peli"name="Nombre_peli" value="{$Pelicula[0]['nombre']}">
        <input type="number" class="form-control" placeholder="Año"id="Año"name="Año" value="{$Pelicula[0]['año']}">
        <input type="number" class="form-control" placeholder="Valoración"id="Valoracion"name="Valoracion" value="{$Pelicula[0]['valoracion']}">
        <input type="number" class="form-control" placeholder="Duración"id="Duracion"name="Duracion" value="{$Pelicula[0]['duracion']}">
        <select class="form-control" id="genero"  name="genero">
                   {foreach from=$Generos item=gen}
                   <option class="dropdown-item" value="{$gen['id_genero']}" name="categoria">{$gen['nombre_genero']}</a>
                     {/foreach}
                 </select>
      </section>
      <section class="form-group mb-2">
        <button type="submit" class="btn btn-dark upload" name="Upload">Edit</button>

      </section>
    </form>
  </section>
</article>
{include file="Footer.tpl"}

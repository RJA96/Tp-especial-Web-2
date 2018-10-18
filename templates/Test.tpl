{include file="Header.tpl"}

  <section class="col-12">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Año</th>
          <th scope="col">Valoracion</th>
          <th scope="col">Duracion</th>
          <th scope="col">Genero</th>
          <th scope="col">Borrar</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Peliculas item=peli}
        <tr>
          <th scope="row">{$peli['nombre']}</th>
          <th scope="row">{$peli['año']}</th>
          <th scope="row">{$peli['valoracion']}</th>
          <th scope="row">{$peli['duracion']}</th>
          <th scope="row">{$peli['id_genero']}</th>
          <th><a href="borrarpelicula/{$peli['id_peliculas']}">Borrar</a></th>
          <th><a href="editarpelicula/{$peli['id_peliculas']}">Editar</a></th>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </section>
  <article class="row">
    <section class="col-12 mb-2">
      <form method="post" action="agregar_pelicula">
        <section class="mt-2 form-group">
          <input type="text" class="form-control" placeholder="Nombre"id="Nombre_peli"name="Nombre_peli" value="">
          <input type="number" class="form-control" placeholder="Año"id="Año"name="Año" value="">
          <input type="number" class="form-control" placeholder="Valoración"id="Valoracion"name="Valoracion" value="">
          <input type="number" class="form-control" placeholder="Duración"id="Duracion"name="Duracion" value="">
          <select class="form-control" id="genero"  name="genero">
                     {foreach from=$Generos item=gen}
                     <option class="dropdown-item" value="{$gen['id_genero']}" name="categoria">{$gen['id_genero']}</a>
                       {/foreach}
                   </select>
        </section>
        <section class="form-group mb-2">
          <button type="submit" class="btn btn-dark upload" name="Upload">Upload</button>
          <button type="submit" class="btn btn-dark edit" name="Edit">Edit</button>
          <button type="button" class="btn btn-dark delete" name="Delate">Delete</button>
        </section>
      </form>
    </section>
  </article>

  <section class="col-6">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">id_genero</th>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidad de Peliculas</th>
          <th scope="col">Borrar</th>w
          <th scope="col">Editar</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Generos item=gen}
        <tr>
          <th scope="row">{$gen['id_genero']}</th>
          <th scope="row">{$gen['nombre']}</th>
          <th scope="row">{$gen['cantidad_peliculas']}</th>
          <th><a href="borrargenero/{$gen['id_genero']}">BORRAR</a></th>
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
          <button type="button" class="btn btn-dark edit" name="Edit">Edit</button>
          <button type="button" class="btn btn-dark delete" name="Delate">Delete</button>
        </section>
      </form>
    </section>
  </article>


{include file="Footer.tpl"}

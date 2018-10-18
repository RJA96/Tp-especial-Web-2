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
        </tr>
        {/foreach}
      </tbody>
    </table>
  </section>
  <article class="row">
    <section class="col-12 mb-2">
      <form method="post" action="agregar_pelicula">
        <section class="mt-2 form-group">
          <input type="text" class="form-control" placeholder="Nombre"name="Nombre" value="">
          <input type="number" class="form-control" placeholder="Año"name="Año" value="">
          <input type="number" class="form-control" placeholder="Valoración"name="Valoración" value="">
          <input type="number" class="form-control" placeholder="Duración"name="Duración" value="">
          <select class="form-control" id="genero"  name="genero">
                     {foreach from=$Generos item=gen}
                     <option class="dropdown-item" value="{$cate['id_categoria']}" name="categoria">{$gen['id_genero']}</a>
                       {/foreach}
                   </select>
        </section>
        <section class="form-group mb-2">
          <button type="submit" class="btn btn-dark upload" name="Upload">Upload</button>
          <button type="button" class="btn btn-dark edit" name="Edit">Edit</button>
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
        </tr>
      </thead>
      <tbody>
        {foreach from=$Generos item=gen}
        <tr>
          <th scope="row">{$gen['id_genero']}</th>
          <th scope="row">{$gen['nombre']}</th>
          <th scope="row">{$gen['cantidad_peliculas']}</th>
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

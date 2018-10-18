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

  <section class="col-12">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidad de Peliculas</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$Generos item=gen}
        <tr>
          <th scope="row">{$gen['nombre']}</th>
          <th scope="row">{$gen['cantidad_peliculas']}</th>

        </tr>
        {/foreach}
      </tbody>
    </table>
  </section>


{include file="Footer.tpl"}

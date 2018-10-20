{include file="Header.tpl"}

<article class="row">
  <section class="col-12 mb-2">
    <form method="post" action="editargenero">
      <section class="mt-2 form-group">
        <input type="hidden" class="form-control" placeholder="Nombre"id="id_genero"name="id_genero" value="{$Generos['id_genero']}">
        <input type="text" class="form-control" id="Nombre" placeholder="Nombre"name="Nombre" value="{$Generos['nombre_genero']}">
        <input type="number" class="form-control" id="cantidad_peliculas" placeholder="cantidad_peliculas"name="cantidad_peliculas" value="{$Generos['cantidad_peliculas']}">
      <section class="form-group mb-2">
        <button type="submit" class="btn btn-dark upload" name="Edit">Edit</button>
      </section>
    </form>
  </section>
</article>

{include file="Footer.tpl"}

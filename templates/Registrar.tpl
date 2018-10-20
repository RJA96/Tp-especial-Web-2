{if $user != null}
{include file="HeaderLogout.tpl"}
{else}
{include file="Header.tpl"}
{/if}
<div class="container use-ajax">
      <article class="row">
        <section class="col-12">
          <form method="post" action="CrearUsuario">
            <section class="mt-5 form-group">
              <label>Usuario</label>
              <input type="text"name="usuario" id="usuario" class="form-control" placeholder="Usuario">
            </section>
            <section class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </section>
            <section class="form-group">
              <label>Contraseña</label>
              <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña">
            </section>
            <section class="form-group">
              <button type="submit" class="btn btn-dark">Registrarse</button>
            </section>
          </form>
        </section>
      </article>
    </div>

{include file="Footer.tpl"}

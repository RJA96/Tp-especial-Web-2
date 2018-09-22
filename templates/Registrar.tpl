{include file="header.tpl"}
<div class="container use-ajax">
      <article class="row">
        <section class="col-12">
          <form>
            <section class="mt-5 form-group">
              <label>Usuario</label>
              <input type="text" class="form-control" placeholder="Usuario">
            </section>
            <section class="form-row">
                <section class="col">
                  <label>Nombre</label>
                  <input type="text" class="form-control" placeholder="Nombre">
                </section>
                <section class="col">
                  <label>Apellido</label>
                  <input type="text" class="form-control" placeholder="Apellido">
                </section>
            </section>
            <section class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email">
            </section>
            <section class="form-group">
              <section class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" value="Masculino">
                <label class="form-check-label" for="inlineRadio1">Masculino</label>
              </section>
              <section class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" value="Femenino">
                <label class="form-check-label" for="inlineRadio2">Femenino</label>
              </section>
            </section>
            <section class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control" placeholder="Contraseña">
            </section>
            <section class="form-group">
              <button type="submit" class="btn btn-dark">Registrarse</button>
            </section>
          </form>
        </section>
      </article>
    </div>

{include file="footer.tpl"}
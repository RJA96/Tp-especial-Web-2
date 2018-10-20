{if $user != null}
{include file="HeaderLogout.tpl"}
{else}
{include file="Header.tpl"}
{/if}

{if $user == null}
<div class="container use-ajax">
     <article class="row">
       <section class="col-6 mx-auto">
         <form method="post" action="verificarLogin">
           <section class="mt-5 form-group">
             <label>Usuario</label>
             <input type="text" class="form-control" name="usuarioId" id="usuarioId" placeholder="Usuario">
           </section>
           <section class="form-group">
             <label>Contraseña</label>
             <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Contraseña">
           </section>
           <section class="form-group">
             <button type="submit" class="btn btn-dark">Login</button>
           </section>
         </form>
       </section>
     </article>
     <article class="row">
       <section class="col-6 mx-auto">
         <a class="registrarse" href="Registrar" class="">Registrarse</a>
       </section>
     </article>
   </div>
   {else}
   <article class="row">
       <section class="mt-5 text-center col-12">
           <p>Ya se encuentra Loegado</p>
       </section>
   </article>
   {/if}
{include file="Footer.tpl"}

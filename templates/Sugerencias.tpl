{if $user != null}
{include file="HeaderLogout.tpl"}
{if $admin == "1"}
<button class="d-none admin" data="admin"></button>
{/if}
{else}
{include file="Header.tpl"}
<button class="d-none admin" data="noadmin"></button>
{/if}

    {if $user != null}
     <div class="container use-ajax">
       <article class="mt-5 row">
         <div class="text-center col-12">
           <p>En este espacio los invitamos a sugerir cambios, solicitar películas, dar su opinión. Todo es bienvenido.</p>
           <p>Muchas gracias.</p>
         </div>
       </article>
       <article class="row">
         <section class="col-12">
           <form>
             <section class="mt-2 form-row">
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
               <label>Numero de telefono</label>
               <input type="text" class="form-control" placeholder="Num. de telefono">
             </section>
             <section class="form-group">
               <label for="Sugerencias">Sugerencias</label>
               <textarea class="form-control">Sugerencias</textarea>
             </section>
             <section class="form-group">
               <button type="submit" class="btn btn-dark">Enviar</button>
             </section>
           </form>
         </section>
       </article>
     </div>
     {else}
     <article class="row">
         <section class="mt-5 text-center col-12">
             <p>Para poder enviar sus segerencias debe estar registrado, puede registrarse <a class="" href="Login">Aqui</a></p>
         </section>
     </article>
     {/if}

{include file="Footer.tpl"}

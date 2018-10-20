{if $user != null}
{include file="HeaderLogout.tpl"}
{else}
{include file="Header.tpl"}
{/if}

{if $user != null}
<div class="container use-ajax">
     <article class="row">
       <section class="col-12">
         <form>
           <section class="mt-5 form-row">
               <div class="col">
                 <label>Nombre</label>
                 <input type="text" class="form-control" placeholder="Nombre">
               </div>
               <div class="col">
                 <label>Apellido</label>
                 <input type="text" class="form-control" placeholder="Apellido">
               </div>
           </section>
           <section class=" form-row">
             <div class="col">
             <label>Numero de telefono</label>
             <input type="text" class="form-control" placeholder="Num. de telefono">
             </div>
             <div class="col">
             <label>Email</label>
             <input type="email" class="form-control" placeholder="Email">
             </div>
           </section>
           <section class="form-group mt-4">
             <button type="submit" class="btn btn-dark">Enviar</button>
           </section>
         </form>
       </section>
     </article>
   </div>
   {else}
   <article class="row">
       <section class="mt-5 text-center col-12">
           <p>Para poder comunicarse debe estar registrado, puede registrarse <a class="" href="Login">Aqui</a></p>
       </section>
   </article>
   {/if}
{include file="Footer.tpl"}

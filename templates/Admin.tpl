{if $user != null}
{include file="HeaderLogout.tpl"}
{if $admin == "1"}
<button class="d-none admin" data="admin"></button>
{/if}
{else}
{include file="Header.tpl"}
<button class="d-none admin" data="noadmin"></button>
{/if}
    <section class="mx-auto mt-2 col-8">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Usuario</th>
          <th scope="col">Email</th>
          <th scope="col">VolverAdmin</th>
          <th scope="col">Borrar</th>
        </tr>
      </thead>
        <tbody>
             {foreach from=$usuarios item=usu}
             {if $user !=$usu['usuario']}
          <tr>
            <th scope="row">{$usu['usuario']}</th>
            <th scope="row">{$usu['email']}</th>
              {if $usu['admin']==0}
            <th><a href="volveradmin/{$usu['id_usuario']}">Volveradmin</a></th>
             {else}
            <th><a href="quitaradmin/{$usu['id_usuario']}">Quitaradmin</a></th>
            {/if}
            <th><a href="borrarusuario/{$usu['id_usuario']}">BORRAR</a></th>
            </tr>
             {/if}
    {/foreach}
        </tbody>
    </table>
  </section>


{include file="Footer.tpl"}

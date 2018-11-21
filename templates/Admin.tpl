{if $user != null}
{include file="HeaderLogout.tpl"}
{if $admin == "1"}
<button class="d-none admin" data="admin" data-nombre="{$user}"></button>
{/if}
{else}
{include file="Header.tpl"}
<button class="d-none admin" data="noadmin"data-nombre="{$user}"></button>
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
             {if $user !=$usu['id_usuario']}
          <tr>
            <td scope="row">{$usu['usuario']}</td>
            <td scope="row">{$usu['email']}</td>
              {if $usu['admin']==0}
            <td><a href="volveradmin/{$usu['id_usuario']}">Volveradmin</a></td>
             {else}
            <td><a href="quitaradmin/{$usu['id_usuario']}">Quitaradmin</a></td>
            {/if}
            <td><a href="borrarusuario/{$usu['id_usuario']}">BORRAR</a></td>
            </tr>
             {/if}
    {/foreach}
        </tbody>
    </table>
  </section>


{include file="Footer.tpl"}

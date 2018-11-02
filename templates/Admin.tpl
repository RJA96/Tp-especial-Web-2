{if $user != null}
{include file="HeaderLogout.tpl"}
{else}
{include file="Header.tpl"}
{/if}
    <section class="mx-auto mt-2 col-8">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Usuario</th>
          <th scope="col">Email</th>
          <th scope="col">VolverAdmin</th>
        </tr>
      </thead>
        <tbody>
             {foreach from=$usuarios item=usu}
          <tr>
            <th scope="row">{$usu['usuario']}</th>
            <th scope="row">{$usu['email']}</th>
              {if $usu['admin']==1}
            <th><a href="volveradmin/{$usu['id_usuario']}">Volveradmin</a></th>
             {else}
            <th><a href="quitaradmin/{$usu['id_usuario']}">Quitaradmin</a></th>
            {/if}
            </tr>
    {/foreach}
        </tbody>
    </table>
  </section>


{include file="Footer.tpl"}
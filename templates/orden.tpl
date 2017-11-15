{include file="header.tpl"}

<h1>Detalle de orden N°{$numero_orden['numero_orden']}</h1>


{if !$orden}
  <h2>La orden no tiene reclamos asignados</h2>
{else}

  {foreach from=$orden  item=reclamo}

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Reclamo {$reclamo['numero_reclamo']}</h3>
    </div>
    <div class="panel-body">
      Orden {$reclamo['numero_orden']}<br>
      Estado {$reclamo['estado']}
    </div>
  </div>

  {/foreach}
{/if}

<a href="agregarReclamo/{$id_orden}">Agregar Reclamo</a><br>
<a href="/garantia2">Volver</a>


{include file="footer.tpl"}
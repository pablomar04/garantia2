{include file="header.tpl"}

<h1>Detalle de orden N°{$numero_orden['numero']}</h1>

<form>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Cambiar estado de orden</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>PENDIENTE</option>
      <option>PROCESADA</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
{if !$orden}
  <h2>La orden no tiene reclamos asignados</h2>
{else}

  {foreach from=$orden  item=reclamo}

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Reclamo {$reclamo['numero_reclamo']}</h3>
    </div>
    <div class="panel-body">
      Orden {$reclamo['numero']}<br>
      Estado {$reclamo['estado']}
    </div>
  </div>

  {/foreach}
{/if}

<a href="agregarReclamo/{$id_orden}">Agregar Reclamo</a>


{include file="footer.tpl"}
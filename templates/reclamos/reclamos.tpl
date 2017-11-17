  
  {foreach from=$reclamos  item=reclamo}

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Reclamo {$reclamo['numero_reclamo']}</h3>
    </div>
    <div class="panel-body">
      Estado {$reclamo['tipo']} | Estado {$reclamo['estado']} | Lote {$reclamo['lote']}
    </div>
  </div>

  {/foreach}
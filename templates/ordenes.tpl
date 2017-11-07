

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Numero</th>
        <th>Sucursal</th>
        <th>Marca</th>
        <th>Chasis</th>
        <th>Fecha apertura</th>
        <th>Fecha cierre</th>
        <th>Fecha envio</th>
        <th>Estado</th>
        <th></th>

      </tr>
    </thead>
    <tbody>
        {foreach from=$ordenes  item=orden}
        <tr>
          <td>{$orden['numero']}</td>
          <td>{$orden['sucursal']}</td>
          <td>{$orden['marca']}</td>
          <td>{$orden['chasis']}</td>
          <td>{$orden['fecha_apertura']}</td>
          <td>{$orden['fecha_cierre']}</td>
          <td>{$orden['fecha_envio']}</td>
          <td>{$orden['estado']}</td>
          <td><a href="verOrden/{$orden['id_orden']}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
          <td><a href="borrarOrden/{$orden['id_orden']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>           
        </tr>
        {/foreach}
    </tbody>
  </table>
</div>
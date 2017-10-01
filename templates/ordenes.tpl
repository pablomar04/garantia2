

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
        <th>Fecha retiro</th>
        <th>Estado</th>

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
          <td>{$orden['fecha_retiro']}</td>
          <td>{$orden['estado']}</td>
          <!--<td><a href="index.php?action=ver_pieza&id_pieza={$pieza['id']}"><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>-->               
        </tr>
        {/foreach}
    </tbody>
  </table>
</div>
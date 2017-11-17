{include file="header.tpl"}
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form action="guardarOrden" method="post">
      <div class="form-group">
        <label for="Numero">Numero de orden</label>
        <input type="number" class="form-control" id="numero" name="numero"   min="111111" max="999999" placeholder="Numero de orden">
      </div>

	  <div class="form-group">
        <label for="Sucursal">Sucursal</label>
        <input type="text" class="form-control" id="sucursal" name="sucursal"   placeholder="Sucursal">
      </div>

      <div class="form-group">
        <label for="Marca">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca"   placeholder="Marca de vehiculo">
      </div>

      <div class="form-group">
        <label for="Chasis">Chasis</label>
        <input type="text" class="form-control" id="chasis" name="chasis"  style="text-transform:uppercase" min length="17" maxlength="17" placeholder="Chasis completo">
      </div>

      <div class="form-group">
        <label for="apertura">Fecha de apertura</label>
        <input type="date" id="apertura" name="apertura" >
      </div>
      <div class="form-group">
        <label for="cierre">Fecha de cierre</label>
        <input type="date" id="cierre" name="cierre" >
      </div>
      <div class="form-group">
        <label for="envio">Fecha de envio</label>
        <input type="date" id="envio" name="envio" >
      </div>
      <div class="form-group">
        <label for="comentario">Comentario</label>
        <textarea name="comentario" id="comentario" name="comentario" rows="8" cols="50" placeholder="Comentario"></textarea>
      </div>          

      <button type="submit" class="btn btn-default">Crear</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
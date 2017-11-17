{include file="../header.tpl"}

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>Agregar reclamo a orden {$numero_orden}</h1>
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form action="guardarReclamo" method="post">

      <div class="form-group">
        <label for="Version">Version</label>
        <select class="form-control" id="sel1">
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          
        </select>
      </div>

      <div class="form-group">
        <label for="Tipo">Tipo</label>
        <select class="form-control" id="sel1">
          <option>1-10</option>
          <option>1-1M</option>
          <option>7-10</option>
          <option>2-10</option>
          <option>1-21</option>
          <option>1-2I</option>
          <option>7-90</option>
        </select>
      </div>

      <div class="form-group">
        <label for="Fecha reclamo">Fecha de reclamo</label>
        <input type="date" id="fechareclamo" name="fecha_reclamo" >
      </div>

      <div class="form-group">
        <label for="Estado">Estado</label>
        <select class="form-control" id="sel1">
          <option>PENDIENTE</option>
          <option>ACREDITADO</option>
          <option>RECHAZADO</option>
        </select>
      </div> 
      <input type="hidden" name="orden" value="{$numeo_orden}" />     
      <button type="submit" class="btn btn-default">Crear</button>
    </form>
    <a href="../../garantia2">Volver</a>
  </div>
</div>
{include file="../footer.tpl"}
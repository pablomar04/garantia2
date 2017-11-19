{include file="../header.tpl"}
      <div class="row">
        <div class="col-md-6 col-md-offset-3 ">
          <form action="verificarUsuario" method="post">
			  <div class="form-group">
			    <label for="usuario">Usuario</label>
			    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Login</button>
			</form>
			{if !empty($error)}
			<div class="alert alert-danger" role='alert'>{$error}</div>
			{/if}
        </div>
      </div>
{include file="../footer.tpl"}
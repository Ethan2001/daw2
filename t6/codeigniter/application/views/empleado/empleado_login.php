<div class="container">
<h2>
Introduce el nombre del empleado y la contraseña</h2>
<form action="<?=base_url()?>empleado/loginform" method="post" class="form">
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input id="nombre" type="text" name="nombre">
		</div>

	<div class="form-group">
		<label for="contrasena">Contrasena</label>
		<input id="contrasena" type="password" name="contrasena">
	</div>
	
	<input type="submit">
</form>
</div>

<main>
	<h1>Gestion de Usuarios </h1>
	<form class="form_usuario" action="./portal.php?action=autentificar_usuario" method="POST">
		<fieldset>
			<legend>Datos básicos</legend>
			<label for="email">Nombre</label>
			<br/>
			<input type="text" name="email" class="item_requerid" size="20" maxlength="25"  placeholder="Miguel" />
			<br/>
			<label for="passwd">Contraseña</label>
			<br/>
			<input type="password" name="passwd"  class="item_requerid" size="20" maxlength="25" value="xxxx" />
			<br/>
		</fieldset>
		<p>
		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>
<main>
	<h1>Datos de registro: </h1>
	<h2 id="errores"> </h2>
	<form id="form_usuario" class="form_usuario" action="?action=insertar_usuario" method="POST">

		<legend>Datos básicos</legend>
		<label for="email">Email</label>
		<br/>
		<input type="text" name="email" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="kiko@ic.es" />
		<br/>
		<label for="passwd">Clave</label>
		<br/>
		<input type="password" name="passwd" class="item_requerid" size="8" maxlength="25" value=""
		/>
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>
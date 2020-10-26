<main>
	<h1>GestiÓn de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		
		<br/>
		<label for="name"> Name</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="50" value="<?php print $name ?>"
		 placeholder="Juan" />
		<br/>
		<label for="surname">Surname</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="50" value="<?php print $surname ?>"
		/>
		<br/>
		<label for="address">Address</label>
		<br/>
		<input type="text" name="address" size="20" maxlength="50" value="<?php print $address ?>" />
		<br/>
		<label for="city">City</label>
		<br/>
		<input type="text" name="city" size="20" maxlength="50" value="<?php print $city ?>" />
		<br/>
		<label for="zip_code">Zip Code</label>
		<br/>
		<input type="text" name="zip_code" size="5" maxlength="5" value="<?php print $zip_code ?>" />
		<br/>
		<label for="foto_file">Profile foto</label>
		<br/>
		<input type="text" name="foto_file" size="20" maxlength="25" value="<?php print $foto_file ?>"
		placeholder="Image link" />
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>
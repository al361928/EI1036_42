<main>
	<h1>Datos de registro: </h1>
	<form class="form_producto" action="?action=insertar_producto method="POST">

		<legend>Datos básicos</legend>
		<label for="name">Name</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Nombre producto" />
		<br/>

		<label for="description">Destription</label>
		<br/>
		<input type="text" name="description" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Description" />
		<br/>

        <label for="price">Price</label>
		<br/>
		<input type="text" name="price" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Price" />
		<br/>

		<label for="foto">Foto</label>
		<br/>
		 <a href="?action=subir_foto">Subir foto</a>
		<br/>

		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>
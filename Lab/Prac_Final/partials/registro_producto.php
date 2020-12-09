<main>
	<h1>Datos de registro: </h1>
		<legend>Datos básicos</legend>
		<form action="?action=insertar_producto" method="POST">
		<label for="name">Name</label>
		<br/>
		<input type="text"  name="name" id="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Nombre producto" />
		<br/>

		<label for="description">Destription</label>
		<br/>
		<input type="text" name="description" id="description" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Description" />
		<br/>

        <label for="price">Price</label>
		<br/>
		<input type="text" name="price" id="price" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Price" />
		<br/>
		<input type="hidden" name="rutaOculta" id="rutaOculta" class="item_requerid" size="20" maxlength="25" value=""/>
		<p><input type="submit" value="Enviar" onclick="eliminarDatos()">
		<input type="reset" value="Deshacer">
		</p>
		</form>
		<div class="oculto" id="caja">
		<button onclick="cerrarCaja()">X</button>
			<form action="?action=upload" method="post" enctype="multipart/form-data">
			
			<p>Selecciona una imagen:
			<input type="file"accept="image/*"name="fileToUpload" id="upload" onchange="handleFiles(this)"></p>
			<canvas id="canvas"> </canvas>
			<center><input type="submit"value="SUBIR"name="submit"></center>
			
			</form>
		</div>
		<label for="foto">Foto</label>
		<br/>
		 <button onclick="mostrarCaja()">Subir foto</button>
		<br/>

		

</main>
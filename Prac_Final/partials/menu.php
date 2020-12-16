<nav>
	<ul>
		<li>
			<a href="./portal.php?action=home">Home</a>
		</li>
		<li>
			<a href="?action=listar_productos">Productos</a>
		</li>

		<?php 
		 echo "<td> <a href='?action=registrar_producto' class=\"btn btn-success\">Añadir producto </a> </td>";
		 if (!isset($_SESSION['usuario'])){
			echo '<li><a href="?action=login">Autentificar</a></li>';			
			echo '<li><img onmouseover="mostrarCarrito()" onclick="cerrarCarrito()" src="./img/carrito-de-compras.png" href="?action=ver_cesta"></img></li>';
			echo '<li><a href="?action=cerrar_sesion">Cerrar Sesión</a></li>';
		 }
		elseif (isset($_SESSION['usuario']) and $_SESSION['usuario'] == 'admin')
			echo '<li><a href="?action=registrar_producto">Registrar Producto</a></li>';
		else 
			echo '<li><a href="?action=registrar_usuario">Registrarme</a></li>';
		?>
		
	</ul>

</nav>

<div id="carrito" class="carrito">
		 <ul class="listado_carrito"></ul>
		 <a href="acciones/carrito.php?accion=comprarCesta&productos=" id="enlace_carrito"><input type="submit" class="clasico" value="Comprar"></a>
  </div>
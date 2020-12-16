function mostrarCarrito() {
    document.getElementById('carrito').style.display="block";
}

function cerrarCarrito() {
    document.getElementById('carrito').style.display="none";
}
var lista = []
function añadirAlCarrito(id) {
    if(localStorage.getItem("id_carrito")) {
		lista = JSON.parse(localStorage.getItem("id_carrito"));
		JSON.stringify(lista);
		lista.push(id);
		localStorage.setItem("id_carrito", JSON.stringify(lista));
	} else {
		lista.push(carro);
		localStorage.setItem("id_carrito", JSON.stringify(lista));
	}

    
    listarCarrito( );
}

function listarCarrito() {
    todoItemsList.innerHTML = '';
	document.getElementById('carrito').href = "partials/menu.php?accion=comprarCesta&productos="
	enlace = document.getElementById('enlace_carrito').href;
	var pos = 0
	lista.forEach(function(valor) {
		const li = document.createElement('li');
	    li.setAttribute('class', 'producto_carrito');
	    li.innerHTML = `
      	${valor.producto}
      	<input class="carrito-eliminar-small" value="X" onclick="eliminarCarrito(${pos})">
    	`;
	    todoItemsList.append(li);
	    pos++;
	    enlace = enlace+""+valor.id_prod+",";
	});
	document.getElementById('enlace_carrito').href = enlace;
}
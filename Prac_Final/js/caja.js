window.onload = function() {
    if(localStorage.getItem("rutafichero")) {
        document.getElementById("rutaOculta").value = localStorage.getItem("rutafichero");
        document.getElementById("name").value = localStorage.getItem("nombre");
        document.getElementById("description").value = localStorage.getItem("descripcion");
        document.getElementById("price").value = localStorage.getItem("precio");
    }
  };



function mostrarCaja() {
    document.getElementById("caja").style.display = "block";
}

function cerrarCaja() {
    document.getElementById("caja").style.display = "none";
}

function eliminarDatos() {
    localStorage.removeItem('rutafichero');
    localStorage.removeItem('nombre');
    localStorage.removeItem('descripcion');
    localStorage.removeItem('precio');
}

function handleFiles(e) {
    let ctx = document.getElementById('canvas').getContext('2d'); 
    let img = new Image; 
    img.src = URL.createObjectURL(e.files[0]); 
    alert(img.src);

    localStorage.setItem("rutafichero", img.src);
    localStorage.setItem("nombre", document.getElementById("name").value);
    localStorage.setItem("descripcion", document.getElementById("description").value);
    localStorage.setItem("precio", document.getElementById("price").value);
    img.onload = function () { 
        ctx.drawImage(img, 20, 20); 
    } 
}
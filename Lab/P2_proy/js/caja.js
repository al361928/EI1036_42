function abrirCaja() {
    letctx = document.getElementById('canvas').getContext('2d'); 
    letimg = new Image; 
    img.src = URL.createObjectURL(e.target.files[0]); 
    img.onload = function () { 
        ctx.drawImage(img, 20, 20); 
    } 

	document.getElementById("caja").style.display = "block";
}
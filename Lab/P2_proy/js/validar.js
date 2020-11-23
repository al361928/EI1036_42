document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("form_usuario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var usuario = document.getElementById('email').value;
    if(usuario.length == 0) {
      alert('No has escrito nada en el usuario');
      return;
    }
    var clave = document.getElementById('password').value;
    if (clave.length < 6) {
      alert('La clave no es válida');
      return;
    }
    var clave = document.getElementById('foto').value;
    if (clave.files[0].size < 2000) {
      alert('La imagen tiene que ser menor de 2MB');
      return;
    }
    this.submit();
  }
function validar() {
    var r='true';
    var inputs = document.forms[0].getElementsByTagName('input');
    for(var i = 0; i < inputs.length; i++) {
        if (inputs[i].getAttribute('type')=='text' && inputs[i].value.length<4){
            document.querySelector("#errores").textContent="Escriba por lo menos 4 caracteres en el campo "+inputs[i].getAttribute('name');
            inputs[i].focus();
            return(false);
        } }
    return(r);
}


function detectores()
{form=document.querySelector("#form_reg");
form.addEventListener("submit",function (event) {
    if (validar()==false){event.preventDefault()}});
}
document.addEventListener("DOMContentLoaded", function (){
    detectores()});


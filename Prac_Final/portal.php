<?php
    //view_form.php

/**
 * * Descripción: Ejemplo de proyecto
 * *
 * * 
 * *
 * * @author  Rafael Berlanga
 * * @copyright 2020 Rafa B.
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 1

 * */

session_start();

include(dirname(__FILE__)."/includes/ejecutarSQL.php");
include(dirname(__FILE__)."/partials/header.php");
include(dirname(__FILE__)."/partials/menu.php");

include(dirname(__FILE__)."/includes/conector_BD.php");
include(dirname(__FILE__)."/includes/table2html.php");
include(dirname(__FILE__)."/includes/subirfichero.php");
include(dirname(__FILE__)."/includes/registrar_producto.php");
include(dirname(__FILE__)."/includes/registrar_usuario.php");
include(dirname(__FILE__)."/includes/autentificar_usuario.php");

include(dirname(__FILE__)."/partials/verCesta.php");
include(dirname(__FILE__)."/partials/cartAction.php");

if (isset($_REQUEST['action'])) $action = $_REQUEST["action"];
else $action = "home";

$central = "Partials/centro.php";

switch ($action) {
    case "home":
        $central = "/partials/centro.php";
        break;
    case "login": 
        $central = "/partials/login.php"; //formulario login 
        break;
    case "do_login":
        $central = autentificar_usuario(); //fijar $_SESSION["usuario"]
        break;
    case "registrar_usuario":
        $central = "/partials/registro_usuario.php"; //formulario usuarios
        break;
    case "insertar_usuario":
        $central = registrar_usuario("t_clientes"); //tabla usuarios
        break;
    case "listar_productos":
        $central = table2html("t_productos"); //tabla productos
        break;
    case "registrar_producto":
        $central = "/partials/registro_producto.php";; //formulario producto
        break;
    case "insertar_producto":
        $central = registrar_producto("t_productos"); //tabla productos
        break;
    case "ver_cesta":
        $central = verCesta(); //cesta en $_SESSION["cesta"]
        break;
    case "encestar":
        $central = meterEnsesion(); //tabla compras
        break;
    case "upload":
        $central = subirFichero(); //subir fichero
        break;
    case "realizar_compra":
        $central = "<p>Todavía no puedo añadir a la cesta</p>"; //cesta en $_SESSION["cesta"]
        break;
    case "cerrar_session":
        session_destroy();
    default:
        $data["error"] = "Accion No permitida";
        $central = "/partials/centro.php";
}

if ($central <> "") include(dirname(__FILE__).$central);

include(dirname(__FILE__)."/partials/footer.php");
?>
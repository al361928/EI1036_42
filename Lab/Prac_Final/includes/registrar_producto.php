<?php

function registrar_producto($table)
{
    global $pdo;

    $datos = $_REQUEST;
    if (count($_REQUEST) < 3) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO $table (nombre, descripcion, precio,foto)
                          VALUES (?,?,?,?)";
    try { 
        $consult = $pdo -> prepare($query);
        $a = $consult->execute(array($_REQUEST['name'], $_REQUEST['description'],$_REQUEST['price'],$_REQUEST['rutaOculta']  ));

        if (1>$a) echo "<h1> Inserción incorrecta </h1>";
        else echo "<h1> Producto registrado! </h1>";

        $_SESSION["usuario"] = "normal";
    
    } catch (PDOException $e) {
        echo ($e->getMessage());
    }
}

?>
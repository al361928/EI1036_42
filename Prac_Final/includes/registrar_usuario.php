<?php

function registrar_usuario($table)
{
    global $pdo;

    $datos = $_REQUEST;
    if (count($_REQUEST) < 2) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO $table (email, password)
                          VALUES (?,?)";
    try { 
        $consult = $pdo -> prepare($query);
        $a = $consult->execute(array($_REQUEST['email'],$_REQUEST['passwd']  ));

        if (1>$a) echo "<h1> Inserción incorrecta </h1>";
        else echo "<h1> Usuario registrado! </h1>";

        $_SESSION["usuario"] = "normal";
    
    } catch (PDOException $e) {
        echo ($e->getMessage());
    }
}

?>
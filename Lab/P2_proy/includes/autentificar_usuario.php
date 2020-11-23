<?php

function autentificar_usuario()
{
    global $pdo;

    /*
    buscar usuario y passwd en DB y comparar con $_POST
    según el resultado fijar la variable de sesion of mostar error

    $_SESSION["usuario"] = role
    */

    $query = "SELECT * From t_clientes";
    $clientes = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
    $email=$_POST["email"];
    $pass=$_POST["passwd"];
    foreach ($clientes as $key=>$value){
        $user=array_values($value);
        if ($email==$user[1]&&$pass==$user[2]){
            echo"<h1>Hola $email</h1>";
            $_SESSION["id_user"]=$user[0];
        break;
        }
        if ($email==$user[1]&&$pass!=$user[2]){
            echo"<h1>Contraseña incorrecta</h1>";
        }

    }
}

?>
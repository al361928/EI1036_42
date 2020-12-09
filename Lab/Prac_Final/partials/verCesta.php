<?php
function verCesta()
{
    print_r($_SESSION["cesta"]);
    global $pdo;
    if (!isset($_SESSION["cesta"])) {
        $query = "SELECT * FROM  t_productos;";
        $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        if (is_array($rows)) {
            print '<table><thead>';
            foreach ($rows[0] as $key => $value) {
                if ($key!="id_producto") {
                    echo "<th>", $key,"</th>";
                }
            }
            print"<th> </th>";
            print "</thead>";
            print "</table>";
        }
    } else {
        print'<table><thead>';
        foreach (explode("|", $_SESSION["cesta"]) as $id_producto) {
            $query="SELECT * FROM t_productos WHERE id_producto = ".$id_producto." ;";
            $pr= $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
            $producto=$pr[0];

            print "<tr>";
            if (is_array($producto)) {
                foreach ($producto as $coche) {
                    if ($producto["id_producto"]!=$coche) {
                        echo "<td>", $coche, "</td>";
                    }
                }
                echo"<td> <a href=\"?action=delete&item_id=",$producto["id_producto"]," \" class=\"btn btn-success\"> Borrar </a> </td>";
            }
            print "</tr>";
        }
        echo"<section> <a href=\"?action=realizar_compra&client_id=",$_SESSION["id_user"]," \" class=\"btn btn-success\"> Realizar Compra </a> </section>";
        print "</table>";
    }
}


?>
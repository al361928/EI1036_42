<?php

function table2html($table)
{
    global $pdo;

    $query = "SELECT * FROM  $table;";
    
    $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);

   

    if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
        print '<table><thead>';
        foreach($rows[0] as $key => $value) {
            echo "<th>", $key,"</th>";
        }
        echo "<th>Acciones </th>";
        print "</thead>";

        $i = 0;
        
        foreach ($rows as $row) {
            print "<tr>";
            foreach ($row as $key => $val) {
                if($key == 'foto') {
                    echo "<td><img src='", $val, "'></td>";    
                } 
                else {
                    echo "<td>", $val, "</td>";
                }
                
            
            }
            //$cliente=$_SESSION["id_user"];
            $id=$row["id_producto"];
            echo "<td> <a href='?action=encestar&client_id=5&product=$id' class=\"btn btn-success\">Añadir a la cesta</a> </td>";
            print "</tr>";
            $i = $i+1;
        }
        print "</table>";
    } 
    else
        print "<h1> No hay resultados </h1>"; 
}

?>
<?php
function meterEnsesion(){
    if(!isset($_SESSION["cesta"])){
        $_SESSION["cesta"]=$_REQUEST["product"];

    }else{
        
        
        $cesta=$_SESSION["cesta"];
        print_r($cesta);
        echo"<br/>";
        $_SESSION["cesta"]=$cesta."|".$_REQUEST["product"];
        
    }
    print_r($_SESSION["cesta"]);
}


?>
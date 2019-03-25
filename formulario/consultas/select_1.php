<?php

require('../configuraciones/conexion.php');

$query1 = "SELECT DISTINCT idPropietario FROM articulo";
$result1 = mysqli_query($conn,$query1) or die(sqli_error($conn));
if($result1){
    foreach($result1 as $fila){
        $a = $fila['idPropietario'];
    }
    $query2 = "SELECT cVendedor FROM vendedor WHERE cVendedor != $a";
    $result2 = mysqli_query($conn,$query2) or die(sqli_error($conn));
    if($result2){
        foreach($result2 as $fila1){
            $b = $fila1['cVendedor'];
        }
        if(isset($b)){
            $query = "SELECT * FROM observador WHERE id = $b";
            $result = mysqli_query($conn,$query) or die(sqli_error($conn));
        }
        else{
            echo "error";
        }
        
    }
}


    
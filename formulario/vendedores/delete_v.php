<?php
 
// Create connection
require('../configuraciones/conexion.php');

$cedula = $_POST["id"];

if($cedula<0){
    echo "El numero de identificacion debe ser positivo";
}

else{
    $query = "SELECT codVendedor FROM vendedor WHERE cVendedor = $cedula";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if($result){
        foreach($result as $fila){
            $codVen = $fila['codVendedor'];
        }
        $query2 = "DELETE FROM articulo WHERE codigoVendedor = $codVen";
        $result2 = mysqli_query($conn,$query2) or die(mysqli_error($conn));
        if($result2){
            $query4 = "DELETE FROM articulo WHERE idPropietario = $cedula";
            $result4 = mysqli_query($conn,$query4) or die(mysqli_error($conn));
            if($result4){
                $query3 = "DELETE FROM vendedor WHERE cVendedor = $cedula";
                $result3 = mysqli_query($conn,$query3) or die(mysqli_error($conn));
                if($result3){
                    $query4 = "DELETE FROM observador WHERE id = $cedula";
                    $result4 = mysqli_query($conn,$query4) or die(mysqli_error($conn));
                    if($result4){
                        header("Location: vendedorb.html");
                    }
                    else {
                        header("Location: error.html");
                    }
                }
                else{
                    header("Location: error.html");
                }
            }
        }
        else{
            header("Location: error.html");
        }
    }
}

?>
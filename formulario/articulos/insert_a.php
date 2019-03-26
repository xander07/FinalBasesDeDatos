<?php
 
// Create connection
require('../configuraciones/conexion.php');
$idProp =(int) $_POST['idPropietario'];

//query
$query2 =  "INSERT INTO articulo(`nombre`,`descripcion`,`categoria`,`estado`,`idPropietario`,
            `tipoPropietario`,`codigoVendedor`)
            VALUES('$_POST[name]','$_POST[description]','$_POST[categoria]','Sin Subastar',
            $idProp,'vendedor',$_POST[codigoVendedor])";
$result2 = mysqli_query($conn,$query2) or die(mysqli_error($conn));
if($result2){
    header ("Location: articuloc.html");
}
 else{
        header("Location: error.html");
    }

?>
<?php
 
// Create connection
require('../configuraciones/conexion.php');

$id = $_POST["id"];

$query = "DELETE FROM articulo WHERE codigoArticulo = $id";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));

if($result){
    header("Location: articulob.html");
}
else {
    header("Location: error.html");
}
<?php
 
// Create connection
require('../configuraciones/conexion.php');

$cedula = $_POST["id"];

//query
if($cedula<0){
	echo "El numero de identificacion debe ser positivo";
}

else{
	$query="INSERT INTO `observador`(`id`,`nombre`, `fecha_nacimiento`, `email`,`contrasena`,`tipo`)
 	VALUES ('$_POST[id]','$_POST[name]',date('$_POST[fNacimiento]'),'$_POST[email]','$_POST[password]','vendedor')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        $query1 = "SELECT count(*) as total FROM vendedor";
        $result1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
        if($result1){
            foreach ($result1 as $fila){
                $codVen="V".$fila['total'];
            }
        }
    
        $query="INSERT INTO `vendedor`(`cVendedor`,`codVendedor`,`pais`,`alcance`)   
        VALUES('$_POST[id]','$codVen','$_POST[pais]','$_POST[alcance]')";
        $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($result){
            header ("Location: vendedorc.html");
        }
        else{
            header("Location: error.html");
        }
        
        
         
 	}else{
        header("Location: error.html");
 	}


}

?>

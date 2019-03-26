<?php
 
// Create connection
require('../configuraciones/conexion.php');

$cedula = $_POST["id"];
$cumple = new DateTime($_POST["fNacimiento"]);
$hoy = new Datetime();
$annos = $hoy ->diff($cumple);




//query
if($cedula<0){
	echo "El numero de identificacion debe ser positivo";
}

else{
    if(($annos ->y)< 18 ){
        echo "Debes ser mayor de edad";
    }
    else{
	$query="INSERT INTO `observador`(`id`,`nombre`, `fecha_nacimiento`, `email`,`contrasena`,`tipo`)
 	VALUES ('$_POST[id]','$_POST[name]',date('$_POST[fNacimiento]'),'$_POST[email]','$_POST[password]','vendedor')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
    
        $query="INSERT INTO `vendedor`(`cVendedor`,`pais`,`alcance`)   
        VALUES('$_POST[id]','$_POST[pais]','$_POST[alcance]')";
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


}

?>

<?php
require('conexion.php');

////Punto 3A
// i) Muestra los datos de los vendedores que no tienen ni un solo articulo

$idPropietario = $_POST["idPropietario"];
$cVendedor = $_POST["cVendedor"];

$query1 = ("SELECT DISTINCT $idPropietario FROM `articulo`");
$query2 = ("SELECT $cVendedor FROM `vendedor` WHERE $cVendedor!=$query1");
$query3 = ("SELECT * FROM `observador` WHERE id = $query2");

$result1 = mysql_query($query3,$conn);
while ($rows=mysql_fetch_array($result1) {
	echo "cVendedor: ".$rows[0]." ";
	echo "codVendedor: ".$rows[1]." ";
	echo "pais: ".$rows[2]." ";
	echo "alcance".$rows[3]."<br>" ;
}


// ii) Muestra el id de cada vendedor, su nombre y el numero de articulos que posee en el momento.

$idObservador = $_POST["id"];
$nombreObservador = $_POST["nombre"];
$tipoPropietario = $_POST["tipoPropietario"];

$query4 = ("SELECT $idPropietario, count(*) AS $cantidad_art FROM `articulo` group by $idPropietario having $idPropietario != (SELECT $idPropietario FROM `articulo` WHERE $tipoPropietario = 'comprador')) R");
$query5 = ("SELECT O.$idObservador, O.$nombre, R.$cantidad_art FROM `observador` O, ($query4) WHERE O.$idObservador=R.$idPropietario");

$result2 = mysql_query($query5,$conn);
while ($rows=mysql_fetch_array($result2) {
	echo "id: ".$rows[0]:" ";
	echo "nombre: ".$rows[1]." ";
	echo "numero de articulo: ".$rows[2]:"<br>";

?>
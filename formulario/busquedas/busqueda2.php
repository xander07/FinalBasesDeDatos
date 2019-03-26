<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajo Final Base de Datos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://file.myfontastic.com/RkCWtGmXx2KTJLHJqWTNtS/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
     para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body bgcolor ="black" background="">
   <header class="header">
       <div class="contenedor">
           <span class="icon-menu" id="btn-menu"></span>
           <nav class="nav" id="nave">
               <ul class="menu">
                   <li class="menu__item"><a class="menu__link" href="../index.html">Inicio</a></li>
                   <li class="menu__item"><a class="menu__link" href="../vendedor.html">Vendedores</a></li>
                   <li class="menu__item"><a class="menu__link" href="../articulo.html">Artículos</a></li>
                   <li class="menu__item"><a class="menu__link" href="../consulta.html">Consultas</a></li>
                   <li class="menu__item"><a class="menu__link" href="../busqueda.html">Busquedas</a></li>
               </ul>
           </nav>
       </div>
   </header>

   <div class="col-6 px-2">
       <table class="table border-rounded">
           <thead class="thead-dark">
               <tr>
                   <th scope="col">Categoria del articulo</th>
                   <th scope="col">Nombre de vendedor</th>
                   <th scope="col">Cedula del vendedor</th>
                   <th scope="col">Email del vendedor</th>
               </tr>
           </thead>
           <tbody>
           <?php

require('../configuraciones/conexion.php');

$id=$_POST["id"];
$query = "SELECT categoria FROM  articulo WHERE codigoArticulo = $id";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
foreach($result as $fila){
    $cat = $fila['categoria'];

    $query2 = "SELECT DISTINCT codigoVendedor from articulo where categoria='$cat'";
    $result2 = mysqli_query($conn,$query2) or die(mysqli_error($conn));
    foreach($result2 as $fila2){
        $ced = $fila2['codigoVendedor'];
        $query3 = "SELECT * from observador where id=$ced";
        $result3 = mysqli_query($conn,$query3) or die(mysqli_error($conn));
        foreach($result3 as $fila3){?>    
            <tr>
            <td><?=$fila['categoria'];?></td>
            <td><?=$fila3['nombre'];?></td>
            <td><?=$fila3['id'];?></td>
            <td><?=$fila3['email'];?></td>
        </tr>
          <?php  
        }
    }
}
?>
           </tbody>
       </table>
   </div>
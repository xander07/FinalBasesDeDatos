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
                   <li class="menu__item"><a class="menu__link" href="#">Inicio</a></li>
                   <li class="menu__item"><a class="menu__link" href="./vendedor.html">Vendedores</a></li>
                   <li class="menu__item"><a class="menu__link" href="./articulo.html">Artículos</a></li>
               </ul>
           </nav>
       </div>
   </header>

   <div class="col-6 px-2">
       <table class="table border-rounded">
           <thead class="thead-dark">
               <tr>
                   <th class ="mostrar_t" scope="col">Cedula</th>
                   <th scope="col">Codigo Vendedor</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Fecha de Nacimiento</th>
                   <th scope="col">Email</th>
                   <th scope="col">Contrasena</th>
                   <th scope="col">Pais</th>
                   <th scope="col">Alcance</th>
               </tr>
           </thead>
           <tbody>
               <?php
               require('select_1.php');
               if(isset($result)){
               if($result){
                   foreach($result as $fila){
                       ?>
                    <tr>
                        <td><?=$fila['cedula'];?></td>
                        
                        <td><?=$fila['nombre'];?></td>
                        <td><?=$fila['fechaNacimiento'];?></td>
                        <td><?=$fila['email'];?></td>
                        <td><?=$fila['contrasena'];?></td>
                        
                    </tr>
                    <?php
                   }
               } else{
                   echo "error";
               }
            }
               ?>
           </tbody>
       </table>
   </div>
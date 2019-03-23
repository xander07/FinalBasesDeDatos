<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajo Final Base de Datos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://file.myfontastic.com/RkCWtGmXx2KTJLHJqWTNtS/icons.css" rel="stylesheet">
</head>
<body bgcolor ="black" background="img/fondo.png">
   <header class="header">
       <div class="contenedor">
           <span class="icon-menu" id="btn-menu"></span>
           <nav class="nav" id="nave">
               <ul class="menu">
                   <li class="menu__item"><a class="menu__link" href="./index.html">Inicio</a></li>
                   <li class="menu__item"><a class="menu__link" href="#">Vendedores</a></li>
                   <li class="menu__item"><a class="menu__link" href="">Artículos</a></li>
               </ul>
           </nav>
       </div>
   </header> 
  <div class="banner">
      <img src="img/bannerv.png" alt="" class="banner__v__img">
      <div class="contenedor">
          <h2 class="banner__titulo"> Bienvenido al menú de vendedores</h2>
          <p class="banner__txt">Aquí podrás registrar y borrar vendedores.</p>
      </div>
  </div>

  <main class="main">
    <div class="contenedor">
      <form action="insert_v.php" class="form-group" method="post">
        <div class="form-group">
          <label for="cedula">Cedula</label>
          <input type="text" name="cedula" id="cedula" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Direccion</label>
          <input type="text" name="direccion" id="direccion" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Telefono</label>
          <input type="text" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="insertar">
          <a href="personas.php" class="btn btn-success">Reiniciar</a>
        </div>
      </form>
    </div>
  </main>
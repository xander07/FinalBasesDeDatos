<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajo Final Base de Datos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://file.myfontastic.com/RkCWtGmXx2KTJLHJqWTNtS/icons.css" rel="stylesheet">
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
               </ul>
           </nav>
       </div>
   </header> 
  <div class="banner">
      <img src="../img/bannerv.png" alt="" class="banner__v__img">
      <div class="contenedor">
          <h2 class="banner__titulo"> Bienvenido al menú de registro de vendedores</h2>
          <p class="banner__txt">Aquí podrás registrar vendedores.</p>
      </div>
  </div>

  <main class="main">
    <div class="formulario">
      <form action="insert_v.php" class="form-group" method="post">
        <div class="form-group">
          <label for="id" >Numero de identificacion</label>
          <input type="text" name="id" id="id" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Fecha de Nacimiento</label>
          <input type="date" name="fNacimiento" id="FNacimiento" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">contrasena</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Pais</label>
          <select name="pais" required>
            <option>Colombia</option>
            <option>Argentina</option>
            <option>Peru</option>
            <option>Mexico</option>
            <option>Ecuador</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Alcance</label>
          <select name ="alcance" required>
            <option>Nacional</option>
            <option>Internacional</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="insertar">
          <a href="vendedor.php" class="btn btn-success">Reiniciar</a>
        </div>
      </form>
    </div>
  </main>
  <footer class="footer">
       <div class="social">
           <a href="" class="icon-fb"></a>
           <a href="" class="icon-wpp"></a>
           <a href="" class="icon-correo"></a>
       </div>
       <p class="copy">&copy;Subastas Los Primiparceros 2019 - Todos los derechos reservados</p>
   </footer>
   <script src="../js/menu.js"></script>
</body>
</html>
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
                   <li class="menu__item"><a class="menu__link" href="../consulta.html">Consultas</a></li>
                   <li class="menu__item"><a class="menu__link" href="../busqueda.html">Busquedas</a></li>
               </ul>
           </nav>
       </div>
   </header> 
  <div class="banner">
      <img src="../img/bannera.png" alt="" class="banner__a__img">
      <div class="contenedor">
          <h2 class="banner__titulo"> Bienvenido al menú de registro de articulos</h2>
          <p class="banner__txt">Aquí podrás registrar articulos.</p>
      </div>
  </div>

  <main class="main">
    <div class="formulario">
      <form action="insert_a.php" class="form-group" method="post">
        <div class="form-group">
          <label for="" >Nombre del artículo</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Descripcion</label>
          <input type="text" name="description" id="description" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Categoria</label>
          <select name="categoria" required>
              <option>Tecnologia</option>
              <option>Entretenimiento</option>
              <option>Hogar</option>
              <option>Vehiculos</option>
              <option>Ropa</option>
              <option>Otros</option>
            </select>
        </div>
        
        <div class="form-group">
          <label for="id">Codigo del Vendedor</label>
          <select name="codigoVendedor" required>
              <?php
              require('../configuraciones/conexion.php');
              $query = "SELECT cVendedor FROM vendedor";
              $result = mysqli_query($conn,$query) or die(mysqly_error($conn));
              if($result){ 
                  foreach($result as $fila){
                    ?>
                    <option><?=$fila['cVendedor'];?></option>
                  <?php
                  }                 
              }
              ?>
              </select>
        </div>  
        <div class="form-group">
          <label for="id">Codigo del Propietario</label>
          <select name="idPropietario" required>
              <?php
              require('../configuraciones/conexion.php');
              $query = "SELECT cVendedor FROM vendedor";
              $result = mysqli_query($conn,$query) or die(mysqly_error($conn));
              if($result){ 
                  foreach($result as $fila){
                    ?>
                    <option><?=$fila['cVendedor'];?></option>
                  <?php
                  }                 
              }
              ?>
              </select>
        </div> 
        
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="insertar">
          <a href="articulo.php" class="btn btn-success">Reiniciar</a>
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
 <script src="./js/menu.js"></script>
</body>
</html>
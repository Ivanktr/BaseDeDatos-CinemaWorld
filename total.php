<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema World</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Jura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosPelicula01.css">
    <link href="https://fonts.googleapis.com/css?family=Syncopate&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href = "https://fonts.googleapis.com/css?family= Raleway & display = swap" rel = "stylesheet">
<link href = "https://fonts.googleapis.com/css?family= Raleway & display = swap" rel = "stylesheet">
<link href = "https://fonts.googleapis.com/css?family= Didact + Gothic & display = swap" rel = "stylesheet">
</head>
<body class="hidden"> 
<div class="centrado" id="onload">
        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
<header >
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="index.php" id="enlace-inicio" class="btn-header"><strong>Inicio</strong></a>
                    <a href="estrenos.php" id="enlace-estreno" class="btn-header"><strong>Estrenos</strong></a>
                    <a href="total.php" id="enlace-pelicula" class="btn-header"><strong>Contenido</strong></a>
                    <a href="nosotros.php"><strong>Nosotros</strong></a>
                    <a href="login.php" id="enlace-contacto" class="btn-header"><strong>Administrar</strong></a>
                    
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <!-- principio -->
        <div class="textos">
            <h1>Cinema World</h1>
            <h2>En estreno, Recomendaciones y Venta </h2>
        </div>
    </header>
    <section style="height:100px"></section>
<center><h1>Lista de Películas</h1></center>
    
        <table cellpadding="0" cellspacing="80px" >
        <thead>
           <tr column-grap="30px">
               <th>Película</th>
               <th>Descripción</th>
               

        </tr>
        </thead>
        <tbody>
              <?php
              include("conexion.php");
              $query ="SELECT pelicula,foto,descripcion,idpelicula FROM peliculas";
              $resultado=$conexion->query($query);
              while($row=$resultado->fetch_assoc()){

              ?>
              <tr>
                  <td><img height="200px" width="180px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/></td>
                  <td><strong><?php echo $row['pelicula'];?></strong><br><?php echo $row['descripcion'];?></td>
                  <td><a href="pelicula01.php?id=<?php echo $row['idpelicula']; ?>"><img width="52px" height="52px" src="img/nextp.png" alt=""></a></td>
              </tr>
              <?php
               }
              ?>
         </tbody>
    </table>


    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>


</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/agregar.css">
    <title>Registro de Peliculas</title>
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body >
              <?php
              include("conexion.php");
              $id = $_REQUEST['id'];
              $query ="SELECT * FROM peliculas WHERE idpelicula = '$id'";
              $resultado=$conexion->query($query);
              $row=$resultado->fetch_assoc();
              ?>


<div class="con_r1"> 
    <a href="vista.php"><img width="50px" height="50px" src="img/regresar.png" alt=""></a>
    </div>
<div class="cine">
     
     <h1>Modificar pelicula</h1>
     <form action="pmodificar.php?id=<?php echo $row['idpelicula']; ?>" method="POST" enctype="multipart/form-data">
        

         <div class="input-box">
         <label for="tipo">Tipo (E o N)</label>
         <input type="text" id="tipo" name="tipo" placeholder=" E (estreno) o N (normal)">
         </div>

         <div class="input-box">
         <label for="pelicula">Nombre de la pelicula</label>
         <input type="text" id="pelicula" name="pelicula" value="<?php echo $row['pelicula']; ?>" placeholder="Ingresar nombre de la pelicula">
         </div>

        <div class="input-box2">
        <label for="fecha">Fecha de estreno</label>
        <input type="date" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>" placeholder="Ingresar la fecha">
        </div>

        <div class="input-box">
        <label for="duracion">Duracion de la pelicula (min)</label>
        <input type="text" id="duracion" name="duracion" value="<?php echo $row['duracion']; ?>" placeholder="Ingresar la duracion">
        </div>

        <div class="input-box3">
        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion" name="descripcion"   placeholder="Ingresar la descripcion"><?php echo $row['descripcion']?></textarea>
        </div>
        
        <div class="input-box4">
        <label for="foto">Foto Superior</label>
        <input type="file" value="" name="foto_s" id="foto_s">


        <div class="input-box4">
        <label for="foto">Foto</label>
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto"></label>
        </div>
        <div class="upimg">

        <input type="file" value="" name="foto" id="foto">
        </div>
        <div id="form_alert"></div>
         </div>

        <div class="input-box">  
        <label for="proveedor">Proveedor</label><br>
        <input type="text" id="proveedor" name="proveedor" value="<?php echo $row['proveedor']?>" placeholder="Ingresar proveedor">
        </div>
        <div class="input-box">  
        <label for="trailer">Trailer</label><br>
        <input type="text" id="trailer" name="trailer" placeholder="Ingresar enlace de trailer">
        </div>
        <input type="submit" value="Modificar" >
         <br><br>
        <input type="reset" value="Limpiar"><br><br>
    </form>
     </div>
     
</body>

</html>
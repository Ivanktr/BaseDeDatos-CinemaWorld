<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/agregar.css">
    <title>Registro de Peliculas</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
    <div class="con_r1"> 
    <a href="indexa.php"><img  width="50px" height="50px" src="img/fecha2.png" alt=""></a>
    </div>

<div class="cine">
    
     <h1>Agregar pelicula</h1>
     <form action="base2.php" method="POST" enctype="multipart/form-data">

        <div class="input-box">  
        <label for="id">Codigo:</label><br>
        <input type="text" id="idpelicula" name="idpelicula" placeholder="">
        </div>

        <div class="input-box">
         <label for="tipo">Tipo (E o N):</label>
         <input type="text" id="tipo" name="tipo" placeholder=" E (estreno) o N (normal)">
         </div>

         <div class="input-box">
         <label for="pelicula">Nombre de la pelicula:</label>
         <input type="text" id="pelicula" name="pelicula" placeholder="">
         </div>

        <div class="input-box2">
        <label for="fecha">Fecha de estreno:</label>
        <input type="date" id="fecha" name="fecha" placeholder="Ingresar la fecha">
        </div>

        <div class="input-box">
        <label for="duracion">Duracion de la pelicula (min):</label>
        <input type="text" id="duracion" name="duracion" placeholder="Ingresar la duracion">
        </div>

        <div class="input-box3">
        <label for="descripcion">Descripcion:</label>
        <textarea id="descripcion" name="descripcion" placeholder="Ingresar la descripcion"></textarea>
        </div>
        
        <section style="height:70px" class="espacion"></section>

        <div class="input-box4">
        <label for="foto">Foto Superior:</label>
        <input type="file" value="" name="foto_s" id="foto_s">

        <div class="input-box4">
        <label class="de" for="foto">Foto:</label>
        
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
        <label for="proveedor">Proveedor:</label><br>
        <input type="text" id="proveedor" name="proveedor" placeholder="">
        </div>

        <div class="input-box">  
        <label for="trailer">Trailer:</label><br>
        <input type="text" id="trailer" name="trailer" placeholder="Ingresar enlace de trailer">
        </div>
        <input type="submit" value="Agregar" >
         <br><br>
        <input type="reset" value="Limpiar"><br><br>
    </form>
     </div>
     <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</body>

</html>
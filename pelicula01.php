<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilosPelicula01.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Jura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Syncopate&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>

<body>
<?php
        
        include("conexion.php");
        $id = $_REQUEST['id'];
        $query ="SELECT * FROM peliculas WHERE idpelicula = '$id'";
        $resultado=$conexion->query($query);
        $row=$resultado->fetch_assoc();
        ?>
    <header  style="background:url(data:image/jpg;base64,<?php echo base64_encode($row['foto_s']); ?>);
 width: 100%;
  height: 600px;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;">
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="index.php" id="enlace-inicio" class="btn-header"><strong>Inicio</strong></a>
                    <a href="estrenos.php" id="enlace-estreno" class="btn-header"><strong>Estrenos</strong></a>
                    <a href="total.php" id="enlace-pelicula" class="btn-header"><strong>Contenido</strong></a>
                    <a href="nosotros.php" id="enlace-contacto" class="btn-header"><strong>Nosotros</strong></a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <!-- principio -->
        <div class="textos">
            <h1><?php echo $row['pelicula']?></h1>
        </div>
    </header>
    <main>
        <section style="height: 100px;" class="espacio"></section>
        <section class="trailer">
            <section class="video">
                <h2 style="font-family: 'Exo', sans-serif;   
                    font-size: 35px; float: left; margin-left: 17.5%;">Trailer</h2>
                <section style="height: 90px;" class="espacio"></section>

                <center><iframe width="65%" height="550" src="<?php echo $row['trailer']; ?>" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe></center>

            </section>
            <section style="height: 100px;" class="espacio"></section>
            <section class="sinopsis">

               <img src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>" width="100%" height="700px" alt="">
               <div  class="contenido">
                   
                   Sinopsis
               </div>
               <div class="sinopsis-conten" >
               <p align="justify" ><?php echo $row['descripcion']?></p>
               </div>

            </section>
        </section>
        <section style="height: 90px; background: rgb(255, 255, 255);" class="espacio"></section>

        <footer>

            <div class="container-footer-all">
                <div class="container-body">


                    <div class="colum2">
                        <div class="foot">
                            <h1>Cinema World</h1><br>
                            <img src="img/icono_c5_2.png" alt="">
                        </div>
                        <div class="row">
                            <img src="img/facebook.png" alt="">

                        </div>
                        <div class="row">
                            <img src="img/twitter.png" alt="">

                        </div>
                        <div class="row">
                            <img src="img/instagram.png" alt="">

                        </div>
                        <div class="row">
                            <img src="img/youtube.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="container-footer">
                <div class="footer">
                    <div class="copyright">
                        & 2019 Todos los Derechos Revervados
                    </div>
                    <div class="information">
                        <a>Informacion Compañia</a> | <a>Privacion y Politica</a> | <a>Terminos y condiciones</a>
                    </div>

                </div>

            </div>
        </footer>

    </main>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Agregar</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
           background:url(img/agregar.jpg);
           width: 100%;
           
        }
    </style>
</head>

<body >
<header>
    <center><h1 style=" color:white; margin-top: 25px; filter: drop-shadow(5px 5px 10px rgb(211, 195, 195));">Lista de peliculas</h1></center>
    <section class="fecha">
        <a href="indexa.php"><img style="margin-left: 25px;" src="img/fecha.png" width="50px" alt=""></a>
    </section>    
    <table style="width: 80%; margin: auto;" class="table table-hover table-dark">
        <thead>
            <tr>
                <th style="text-align: center;" scope="col">ID Pelicula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th style="text-align: center;" scope="col">Descripcion</th>
                <th style="text-align: center;" scope="col">Operacion</th>
            </tr>
        </thead>
        <tbody>
              <?php
              include("conexion.php");
              $query ="SELECT foto,descripcion,idpelicula,pelicula FROM peliculas";
              $resultado=$conexion->query($query);
              while($row=$resultado->fetch_assoc()){

              ?>
            <tr>
                <th style="text-align: center;" scope="row"><?php echo $row['idpelicula'];?></th>
                <td style="text-align: center;"><?php echo $row['pelicula'];?></td>
                <td><img height="200px" width="180px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/></td>
                <td style="text-align: justify;"><?php echo $row['descripcion'];?></td>
                <td><span style="margin: 6px; ">
                        <a href="modificar.php">
                            <img style="float: left; margin: 5px;" src="img/modificar.png" width="40px" height="40px"
                                alt="">
                        </a>

                    </span>
                    <span style="margin: 6px;">
                        <a href="eliminar.php">
                            <img style="float: left;  margin: 5px;" src="img/eliminar.png" width="40px" height="40px"
                                alt="">
                        </a>

                    </span></td>
            </tr>
            <?php
               }
              ?>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    </header>
</body>

</html>
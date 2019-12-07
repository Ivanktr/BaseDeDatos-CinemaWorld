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
    <!-- Encabezado -->
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="index.php" id="enlace-inicio" class="btn-header"><strong>Inicio</strong></a>
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
    <!-- Estrenos -->
    <main>
        <section class="team contenedor" id="estreno">
            <h3>Contenido destacado</h3>
            <div style="height: 25px;" class="separador"></div>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/jocker.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Joker</h4>
                    </div>

                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/dbz.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Dragon Ball Broly</h4>

                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/end.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>End Game</h4>

                    </div>
                </div>
            </div>
            <div style="height: 25px;" class="separador"></div>
            <!-- end of estrenos en inglish papa :v -->

            <section class="work contenedor" id="pelicula">
                <h3><strong>Películas en estreno</strong></h3>
                <div style="height: 25px;" class="separador"></div>
                <div class="botones-work">
                    <ul>
                        <li class="filter active" data-nombre='todos'><strong>Todos</strong></li>
                        <li class="filter" data-nombre='diseño'><strong>Comedia</strong></li>
                        <li class="filter" data-nombre='programacion'><strong>Terror</strong></li>
                        <li class="filter" data-nombre='marketing'><strong>Acción</strong></li>
                    </ul>
                </div>
                <div class="galeria-work">
                        <div class="cont-work programacion">
                            <div class="img-work">
                                <img src="img/it.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>It 2</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="cont-work programacion">
                            <div class="img-work">
                                <img src="img/chuky.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Programacion</h4>
                            </div>
                        </div>
                        <div class="cont-work programacion">
                            <div class="img-work">
                                <img src="img/halloweend.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Programacion</h4>
                            </div>
                        </div>
                        <div class="cont-work diseño">
                            <div class="img-work">
                                <img src="img/enchufe.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Diseño</h4>
                            </div>
                        </div>
                        <div class="cont-work diseño">
                            <div class="img-work">
                                <img src="img/miclobin.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Diseño</h4>
                            </div>
                        </div>
                        <div class="cont-work diseño">
                            <div class="img-work">
                                <img src="img/sha.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Diseño</h4>
                            </div>
                        </div>
                        <div class="cont-work marketing">
                            <div class="img-work">
                                <img src="img/will.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Marketing</h4>
                            </div>
                        </div>
                        <div class="cont-work marketing">
                            <div class="img-work">
                                <img src="img/zilla.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Marketing</h4>
                            </div>
                        </div>
                        <div class="cont-work marketing">
                            <div class="img-work">
                                <img src="img/hell.jpeg" alt="">
                            </div>
                            <div class="textos-work">
                                <h4>Marketing</h4>
                            </div>
                        </div>
                    </div>
            </section>

    </main>
    <footer>

        <div class="container-footer-all">
            <div class="container-body">


                <div class="colum2">
                    <div class="foot">
                        <h1>Cinema World</h1><br>
                        <a href=""><img src="img/icono_c5_2.png" alt=""></a>
                        
                    </div>
                    <div class="row">
                        <a target="_blank" href="https://www.facebook.com/"><img src="img/facebook.png" alt=""></a>

                    </div>
                    <div class="row">
                        <a target="_blank" href="https://twitter.com/login?lang=es"><img src="img/twitter.png" alt=""></a>

                    </div>
                    <div class="row">
                       <a target="_blank" href="https://www.instagram.com/?hl=es-la"><img src="img/instagram.png" alt=""></a> 

                    </div>
                    <div class="row">
                        <a target="_blank" href="https://www.youtube.com/"><img src="img/youtube.png" alt=""></a>

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
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>

</html>
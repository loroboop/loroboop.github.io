<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro - BiGilsurge</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/boot.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="img/logo_icono_BG.ico">
</head>

<body>

    <!---------------->
    <!--ENCABEZADO-->
    <!---------------->
    <header class="container-fluid d-flex justify-content-around bg-blue">

        <i class="bi bi-telephone-fill text-light mb-0 p-2 fs-6 fw-bold">+57 3192414495</i>
        <p class="text-light mb-0 p-2 fs-6 fw-bold ">I.E Gilberto Alzate Avendaño</p>
        <div class="my-2">
            <a href="https://www.instagram.com/tfsamu/"> <i class="bi bi-instagram text-light mb-0 p-3 fs-5"></i></a>
            <a href="https://www.facebook.com/instgilberto.alzateavendano.5"><i class="bi bi-facebook text-light mb-0 p-3 fs-5 "></i></a>

        </div>
    </header>

    <!---------------->
    <!--MENÚ - NAVBAR-->
    <!---------------->

    <nav class="navbar navbar-expand-lg bg-light text-dark py-0 pr-1" id="menu">
        <div class="container-fluid ">

            <button class="navbar-toggler m-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--IMAGEN-->

            <div class="h-100 mx-4" id="caja-img-nav">
                <img src="img/logo_editado.png" class="h-100" width="100">
            </div>

            <!--IMAGEN-->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">

                    <li class="nav-item dropdown link_hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" href="catalogo.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Inicio
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="intro.php">Introducción</a></li>
                            <li><a class="dropdown-item" href="registro.php">Registrarse</a></li>


                        </ul>
                    </li>



                    <li class="nav-item dropdown link_hover">
                        <a class="nav-link active" href="quienes_somos.php">¿Quiénes Somos?</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <!---------------->
    <!--CARRUSEL - SLIDER-->
    <!---------------->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active " data-bs-interval="2000 ">
                <img src="img/PLANTILLAS/1.jpg " class="d-block w-100 " id="imagen_carrusel ">
            </div>

            <div class="carousel-item ">
                <img src="img/PLANTILLAS/8.jpg " class="d-block w-100 " id="imagen_carrusel ">
            </div>

            <div class="carousel-item ">
                <img src="img/PLANTILLAS/3.jpg " class="d-block w-100 " id="imagen_carrusel ">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-------------------->
    <!--INTRODUCCIÓN-->
    <!---------------->

    <section class="w-50 mx-auto text-center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Una biblioteca que solo podrás encontrar en el <span class="color-blue">Gilberto Alzate Avendaño</span></h1>
        <p class="p-3"><span style="font-weight: bold;">BiGilsurge</span> es el mejor lugar para pasar un rato agradable. ¿Qué mejor que leer un buen libro mientras mecateas un poco?</p>
    </section>

    <!-------------------->
    <!--4 CONTENEDORES-->
    <!---------------->

    <section class="container-fluid">

        <div class="row w-75 mx-auto my-5 servicio-fila">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center my-5 icono-wrap">
                <img src="img/PLANTILLAS/desarrollo.webp" alt="primera" width="140" height="120">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 color-blue">Desarrollo</h3>
                    <p class="px-4">Por medio de las distintas herramientas presentes en este sistema buscamos el buen desarrollo de todos los estudiantes, realizandolo de una manera mucho más dinámica que otras librerias.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center my-5 icono-wrap">
                <img src="img/PLANTILLAS/lectura.png" alt="primera" width="140" height="120">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 color-blue">Objetivo</h3>
                    <p class="px-4">Lograr una mucho mejor utilización de la biblioteca la cual presente en el Gilberto Alzate, ya que vemos que no hay mucha atención a este lugar tan importante, y nuestro equipo puede mejorar este espacio.</p>
                </div>
            </div>
        </div>

        <div class="row w-75 mx-auto my-5 servicio-fila">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center my-5 icono-wrap">
                <img src="img/PLANTILLAS/vision.png" alt="primera" width="140" height="120">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 color-blue">Visión</h3>
                    <p class="px-4">Velamos en un futuro llegar a todas las sedes existentes que pertenezcan al Alzate, para que cada alumn@ tenga una oportunidad de conocer e interesarse por la lectura.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center my-5 icono-wrap">
                <img src="img/PLANTILLAS/innovacion.png" alt="primera" width="140" height="120">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 color-blue">Innovación</h3>
                    <p class="px-4">En nuestra sede nunca en la historia ha existido un sistema de tal magnitud, que coordine a los docentes junto con los estudiantes, ¿Y Por qué no puede ser esta la ocasión para escribir un antes y un después? Te animo a que formes
                        parte de este proyecto.</p>
                </div>
            </div>
        </div>
    </section>

    <!-------------------->
    <!--IMAGEN DE MAFALDA-->
    <!---------------->

    <section>
        <div class=" w-75 m-auto text-center" id="equipo">
            <h1 class="mb-5 fs-2">
                Importante el<span style="font-weight: bold;"> Leer bien</span>
            </h1>
            <p class="fs-4">
                Todo este apartado es importante que lo leas bien, porque de otra manera no entenderás de la mejor manera para que funciona cada sección de BiGilsurge.
                <br>
                <br> Lee detenidamente por favor, es información valiosa
            </p>
        </div>

        <div class="mt-5 text-center">
            <img class="img-fluid" src="img/PLANTILLAS/mafalda1.png" id="img_mafalda">
        </div>
        <br>
        <br>

        <div id="local" class="border-top border-2">
            <div class="mapa">
                <img src="img/PLANTILLAS/7.jpg" class="w-100">
            </div>
            <div class="wrapper">
                <h2>BiGilsurge</h2>
                <h2 class="color-blue mb-4" id="typewriter"></h2>
                <p class="fs-5 text-body">La lectura es super importante implementarla en nuestros hábitos, en nuestra vida cotidiana, y esto ultimo no es un mito. Acá tendras todo el tiempo disponible con distintas herramientas para cada objetivo que deseas alcanzar.
                    <br> ¡Te deseamos suerte y exitos!
                </p>
                <section class="d-flex" id="numeros-local">
                    <div>
                        <p class="fw-bold fs-5">+250</p>
                        <p>Dias</p>
                    </div>
                    <div>
                        <p class="fw-bold fs-5">100%</p>
                        <p>Disponibles</p>
                    </div>
                    <div>
                        <p class="fw-bold fs-5">All</p>
                        <p>The time</p>
                    </div>
                </section>
            </div>

        </div>
    </section>

    <!-------------------->
    <!--MAPA BG-->
    <!---------------->

    <section id="seccion-contacto" class="border-secondary border-2">

        <div class="row" id="contenedor-formulario">
            <br>
            <p class="t-mapa" style="margin-top: 10px;">Ubicación de la institución</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.848310495218!2d-75.56538352556557!3d6.283662425905106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428d1e311067b%3A0x865667a3875f854b!2sCl.%2092%20%2351a100%2C%20Aranjuez%2C%20Medell%C3%ADn%2C%20Aranjuez%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1696889637122!5m2!1ses-419!2sco" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>




    <!-- Footer Inicio -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 0px;">
        <div class="row pt-5">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-5">
                <a href="quienes_somos.php" class="navbar-brand">
                    <img src="img/logo_principalBG.png" alt="" width="300px" height="300px" class="logo-footer">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Otros servicios</h5>
                <div class="d-flex flex-column justify-content-start">
                    <i class="fa fa-angle-right mr-2 mb-2"></i>Prevención de drogas</a>
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Psicología
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Guías de apoyo
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Problemas intrafamiliares
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Acoso sexual
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Otros servicios

                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usa estos links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <br>
                    <br>
                    <a class="text-white-50 mb-2" href="registro.php"><i class="fa fa-angle-right mr-2"></i>Registrarse</a>

                    <a class="text-white-50 mb-2" href="quienes_somos.php"><i class="fa fa-angle-right mr-2"></i>¿Quienes Somos?</a>

                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contactanos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Cl. 92 #51a100, Aranjuez, Medellín, Antioquia</p>
                <p><i class="fa fa-phone-alt mr-2"></i>3192414495</p>
                <p><i class="fa fa-envelope mr-2"></i>bigilsurge.alzate2023@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Sugerencias</h6>
                <div class="w-100 ">
                    <!--============SUGERENCIAS===========-->
                    <form class="form-floating text-center d-grid gap-2" method="post">
                        <textarea class="form-control p-2 rounded-2" id="floatingTextarea" name="sugerencia" placeholder="¡Querido usuario! con respeto por favor"></textarea>
                        <input type="date" name="fecha" class="form-control col-lg-6 col-md-6 col-sm-12 text-center h-50 py-3">

                        <input type="submit" class="btn btn-info text-light bg-blue mt-2" name="suger">
                        <?php
                        include("../back_end/sugerencias_be_f.php")
                        ?>

                    </form>
                    <!--============SUGERENCIAS===========-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Derechos de autor &copy; BiGilsurge. Todos los derechos
                    reservados 2022-23.</a>
                </p>
            </div>

        </div>
    </div>
    </div>

    <!-- FIN / FORO SOCIAL-->






    <!-----------------------------------
------------Links deJavaScript, Boot, main.js,efecto writer-------
------------------------------------->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="java/boot.js"></script>
    <script src="java/main.js"></script>
</body>

</html>
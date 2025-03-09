<!--IMPEDIR EL ACCESO NO AUTORIZADO A USUARIOS -->

<?php

session_start();

if (!isset($_SESSION['usuario'])) {
	echo '
        <script>
            alert("Por favor debes iniciar sesión");
            window.location = "inicio_sesion.php";
        </script>
        ';
	session_destroy();
	die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - BiGilsurge</title>
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
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--IMAGEN-->

            <div class="h-100 mx-5" id="caja-img-nav">
                <img src="img/logo_editado.png" class="h-100" width="100">
            </div>



            <!--IMAGEN-->
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">



                    <li class="nav-item dropdown link_hover">
                        <a class="nav-link active" href="foro_social.php">Foro Social</a>
                    </li>

                    <li class="nav-item  dropdown link_hover">
                        <a class="nav-link active" href="catalogo.php" id="select">Catálogo</a>
                    </li>


                </ul>




            </div>
            <!--CERRAR SESIÓN-->
            <div>

                <a href="cerrar_sesion.php" class="link-cerrar color-blue">Cerrar sesión</a>
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
                <img src="img/PLANTILLAS/2.jpg " class="d-block w-100 " id="imagen_carrusel ">
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

    <section class="w-50 mx-auto text-center pt-5 " id="intro ">
        <h1 class="p-3 fs-2 border-top border-3 ">Una biblioteca que solo podrás encontrar en el <span class="color-blue ">Gilberto Alzate Avendaño</span></h1>
        <p class="p-3 "><span class="color-blue ">BiGilsurge</span> es el mejor lugar para pasar un rato agradable. ¿Qué
            mejor que leer un buen libro mientras mecateas un poco?</p>
    </section>

    <!-------------------->
    <!--3 CONTENEDORES-->
    <!---------------->

    <section class="container-fluid ">
        <div class="row w-75 mx-auto my-5 border-bottom border-top border-1 servicio-fila ">


            <div>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-left my-5 icono-wrap ">
                <img src="img/PLANTILLAS/catalogo1.png " alt="primera " width="250px " height="250px ">
                <div class="text-four ">
                    <h3 class="fs-5 mt-4 px-4 pb-1 fs-2 ">¿Qué es?</h3>
                    <p class="mx-5 px-4 ">En este lugar se presentan los libros disponibles, reservados y no reservados,
                        descargados, etc. Buscamos que todo sea muy interactivo para cada usuario o estudiantes</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-left my-5 icono-wrap ">
                <img src="img/PLANTILLAS/funciones.png " alt="primera " width="250px " height="250px ">
                <div class="text-four ">
                    <h3 class="fs-5 mt-4 px-4 pb-1 fs-2 ">Funciones</h3>
                    <p class="mx-5 px-4 ">Tal como dice el articulo anterior, puedes descargar, reservar por medio de
                        este sistema. Solo tienes que tener una cuenta creada en BiGilsurge, para que podamos
                        identificarte y saber a quién le estamos prestando el servicio.</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-left my-5 icono-wrap ">
                <img src="img/PLANTILLAS/disgrute.png " alt="primera " width="250px " height="250px ">
                <div class="text-four ">
                    <h2 class="fs-5 mt-4 px-4 pb-1 fs-2 ">Disfrutalo</h2>
                    <p class=" mx-5 px-4 ">Investiga, pregunta, lee, no hay problema, todo lo hacemos nada más y nada
                        menos que para tí.</p>
                </div>
            </div>
        </div>


    </section>



    <!--=============================->
    <!-=====TARJETAS EFECTO HOVER==============>
    <!-===========================-->

    <section class="container-fluid">
        <article class="row justify-content-center ">


            <div class="col-lg-3 col-md-6 col-sm-12 card mx-3" style="width: 18rem; " id="card-hover ">

                <img src="img/PLANTILLAS/ana_frank.jfif " class="card-img-top img-thumbnail" alt="... ">
                <div class="card-body text-center">
                    <h5 class="card-title text-center color-blue ">Ana Frank</h5>
                    <p class="card-text text-center ">Wow, este libro es historia pura de la Alemania nazi de Hitler, descubre y aprende de todo lo que vivian los judíos hace casi 90 años. Así que ¿Que estás esperando por leerlo tú? Animate, animate.</p>
                </div>

                <ul class="list-group list-group-flush ">
                    <li class="list-group-item ">Descargar</li>
                    <li class="list-group-item ">Reservar</li>
                    <li class="list-group-item ">Guardar</li>
                </ul>
                <div class="card-body text-center ">
                    <a href="paginas_libros/ana_frank.php" class="card-link ">Resumen</a>

                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-12 card mx-3" style="width: 18rem; " id="card-hover ">
                <img src="img/PLANTILLAS/ventajas.webp " class="card-img-top img-thumbnail " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title text-center color-blue ">Ventajas</h5>
                    <p class="card-text text-center ">Libro bastante bueno, entretenido y que es muy divertido de leer,
                        trata sobre la historia de un joven con distintas aventuras, muy loco la verdad toda su historia.</p>
                </div>
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item ">Descargar</li>
                    <li class="list-group-item ">Reservar</li>
                    <li class="list-group-item ">Guardar</li>
                </ul>
                <div class="card-body text-center ">
                    <a href="paginas_libros/ventajas.php" class="card-link ">Resumen</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card mx-3 " style="width: 18rem; " id="card-hover ">
                <img src="img/PLANTILLAS/el_perfume.webp " class="card-img-top img-thumbnail " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title text-center color-blue ">El Perfume</h5>
                    <p class="card-text text-center ">La historia de un asesino, que se va creando y formando poco a
                        poco, ten cuidado leyendolo, no es para todos los lectores, pero supremamente bueno la verdad.
                    </p>
                </div>
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item ">Descargar</li>
                    <li class="list-group-item ">Reservar</li>
                    <li class="list-group-item ">Guardar</li>
                </ul>
                <div class="card-body text-center ">
                    <a href="paginas_libros/elperfume.php" class="card-link ">Resumen</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card mx-3 " style="width: 18rem; " id="card-hover ">
                <img src="img/PLANTILLAS/viaje_centro.jpg " class="card-img-top img-thumbnail mt-5 " alt="... ">
                <div class="card-body ">
                    <h5 class="card-title text-center color-blue ">Viaje al centro de la tierra</h5>
                    <p class="card-text text-center ">Perteneciente al género de aventuras, es un libro super
                        entretenido y muestra aventuras jamas vistas. Te invitamos a leer este libro, escrito por Jules
                        Verne.</p>
                </div>
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item ">Descargar</li>
                    <li class="list-group-item ">Reservar</li>
                    <li class="list-group-item ">Guardar</li>
                </ul>
                <div class="card-body text-center ">
                    <a href="paginas_libros/viaje_centro.php" class="card-link ">Resumen</a>

                </div>
            </div>
        </article>
    </section>
    <br>
    <br>
    <br>

    <!-- Destination Start -->
    <hr style="box-shadow: 2px 2px 10px black; border: .5px solid; ">
    <div class="text-center title-cat m-5 ">
        <h6 class="text-primary text-uppercase " style="letter-spacing: 5px; ">Catálogo</h6>
        <h1>Explora nuestro catálogo!!</h1>
    </div>


    <!-- Destination Start -->

    <!--=============================->
    <!-=====GÉNEROS DE LIBROS -- BIGILSURGE ==============>
    <!-===========================-->


    <article class="row my-5" id="contenedor-imagenes">

        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/quimica.php">
                    <img src="img/PLANTILLAS/50_cosas_quimica.jfif" alt="(1)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Química</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/matemáticas.php">
                    <img src="img/PLANTILLAS/matematicas_paraque.webp" alt="(2)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Matemáticas</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/fisica.php">
                    <img src="img/PLANTILLAS/fisica_nuevo.webp" alt="(3)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Física</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/biologia.php">
                    <img src="img/PLANTILLAS/biologia_presente.gif" alt="(8)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Biología</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/historia.php">
                    <img src="img/PLANTILLAS/historia_1984.webp" alt="(4)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Historia</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/ciencias_sociales.php">
                    <img src="img/PLANTILLAS/sociales_mente_justos.webp" alt="(5)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Sociales</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/poesia.php">
                    <img src="img/PLANTILLAS/divina_comedia_poesia.jfif" alt="(6)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Poesía</h2>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/horror.php">
                    <img src="img/PLANTILLAS/terror_it.jpg" alt="(7)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Horror</h2>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-md-4 col-sm-12">
            <div class="imagen">
                <a href="paginas_libros/aventura.php">
                    <img src="img/PLANTILLAS/aventura2_tom.jpg" alt="(9)" style="width: 200px;" height="250px">

                    <div class="overlay">
                        <h2>Aventura</h2>
                    </div>
                </a>
            </div>
        </div>
    </article>









    <!-- Footer Inicio -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 0px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="quienes_somos.php" class="navbar-brand">
                    <img src="img/logo_principalBG.png" alt="" width="300px" height="300px" class="logo-footer">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Nuestros servicios</h5>
                <div class="d-flex flex-column justify-content-start">
                    <i class="fa fa-angle-right mr-2 mb-2"></i>Prevención de drogas</a>
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Psicología
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Guías de apoyo
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Problemas intrafamiliares
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Acoso sexual
                    <i class="fa fa-angle-right mr-2  mb-2"></i>Otros servicios

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usa estos links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <br>
                    <br>
                    <a class="text-white-50 mb-2" href="registro.php"><i class="fa fa-angle-right mr-2"></i>Registrarse</a>
                    <a class="text-white-50 mb-2" href="foro_social.php"><i class="fa fa-angle-right mr-2"></i>Foro
                        Social</a>
                    <a class="text-white-50 mb-2" href="catalogo.php"><i class="fa fa-angle-right mr-2"></i>Catálogo</a>
                    <a class="text-white-50 mb-2" href="quienes_somos.php"><i class="fa fa-angle-right mr-2"></i>¿Quienes Somos?</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contactanos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Cl. 92 #51a100, Aranjuez, Medellín, Antioquia</p>
                <p><i class="fa fa-phone-alt mr-2"></i>3192414495</p>
                <p><i class="fa fa-envelope mr-2"></i>bigilsurge.alzate2023@gmail.com</p>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Derechos de autor &copy; BiGilsurge. Todos los derechos
                    reservados 2022-23.</a>
                </p>
            </div>

        </div>
    </div>

    <!-- FIN / FORO SOCIAL-->





    <!-----------------------------------
------------Links deJavaScript, Boot, main.js,efecto writer-------
------------------------------------->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js "></script>
    <script src="java/boot.js "></script>
    <script src="java/main.js "></script>
</body>

</html>
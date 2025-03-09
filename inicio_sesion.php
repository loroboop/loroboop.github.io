<?php

session_start();
if (isset($_SESSION['usuario'])) {
    header("location: foro_social.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - BiGilsurge</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/boot.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="img/logo_icono_BG.ico">
</head>

<body>


    <!--==IMAGENES DE LOS LOGOS==============-->

    <div class=" image-logos">

        <div class="imagenes ">
            <a href="intro.php"><img src="img/logo_icono_BG.ico" alt="logo_bigilsurge" width="120px"></a>
            <img src="img/logo-alzate.jpeg" alt="logo_bigilsurge" width="120px">
        </div>
        <div class="imagenes ">
        </div>

    </div>

    <form class="form container-fluid border my-5" method="post" action="../back_end/login_usuario_be.php">


        <h2 class="form_register mb-4">Inicio de Sesión</h2>
        <p class="form_parrafo">¿No tienes una cuenta?
            <a href="registro.php">Entra aquí</a>
        </p>

        <br>
        <div class=" form_container">

            <div class="input-group input-t row">
                <input type="number" name="Numero_documento" class="form-control col-lg-6 col-md-6 col-sm-12 " placeholder="Número de documento">
            </div>

            <div class="input-group input-t row">
                <input type="email" name="Correo" class="form-control  col-lg-6 col-md-6 col-sm-12" placeholder="Correo">
            </div>

            <div class="input-group input-t row">
                <input type="password" name="Contraseña" class="form-control  col-lg-6 col-md-6 col-sm-12" placeholder="Contraseña">
            </div>



            <div class="d-grid gap-2 d-md-block my-5">
                <input class="btn btn-primary btn-enviar" type="submit" name="register" value="Iniciar Sesión">
                <input class="btn btn-primary btn-reset" type="reset" value="Borrar">
            </div>

        </div>

        </div>



    </form>

</body>

</html>
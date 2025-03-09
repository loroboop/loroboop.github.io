<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - BiGilsurge</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/boot.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="img/logo_icono_BG.ico">
</head>

<body class="bg-registro">

    <!--==INICIO--MAGENES DE LOS LOGOS==============-->

    <div class=" image-logos">

        <div class="imagenes ">
            <a href="intro.php"><img src="img/logo_icono_BG.ico" alt="logo_bigilsurge" width="120px"></a>
            <img src="img/logo-alzate.jpeg" alt="logo_bigilsurge" width="120px">
        </div>
        <div class="imagenes ">
        </div>

    </div>
    <!--==FIN---IMAGENES DE LOS LOGOS==============-->

    <form method="post" class="form container-fluid border">

        <h2 class="form_register mb-4">Registrarse</h2>
        <p class="form_parrafo">¿Ya tienes una cuenta?
            <a href="inicio_sesion.php">Entra aquí</a>
        </p>

        <br>
        <div class="form_container">
            <!--TIPO DE DOCUMENTO HACERLO Y ESTILIZARLO PORQUE QUEDA DEIFERENTE A LOS INPUT-->

            <div class="input-group row mb-3">
                <input type="number" name="Numero_documento" class="form-control col-lg-6 col-md-6 col-sm-12" placeholder="Número de documento">
            </div>

            <div class="input-group row mb-3">
                <input type="text" aria-label="First name" class="form-control col-lg-6 col-md-6 col-sm-12" name="Nombre" placeholder="Nombres">
                <input type="text" aria-label="Last name" class="form-control col-lg-6 col-md-6 col-sm-12" name="Apellido" placeholder="Apellidos">
            </div>

            <div class="input-group row mb-3">
                <select class="form-select col-lg-4 col-md-12 col-sm-12" id="inputGroupSelectGrado" name="Grado">
                    <option>Grado</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>No aplica</option>
                </select>

                <select class="form-select col-lg-4 col-md-12 col-sm-12" id="inputGroupSelectGrupo" name="Grupo">
                    <option>Grupo</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>No aplica</option>
                </select>

                <select class="form-select col-lg-4 col-md-12 col-sm-12" id="inputGroupSelectCargo" name="Tipo_usuario">
                    <option>Cargo</option>
                    <option>Estudiante</option>
                    <option>Docente</option>
                </select>
            </div>

            <div class="input-group row mb-3">
                <input type="email" name="Correo" class="form-control col-lg-6 col-md-6 col-sm-12" placeholder="Correo">
            </div>

            <div class="input-group row mb-3">
                <input type="password" name="Contraseña" class="form-control col-lg-6 col-md-6 col-sm-12" placeholder="Contraseña">
            </div>

            <!--===========BOTONES SUBMIT==========-->
            <div class="d-grid gap-2 d-md-block my-5">
                <input class="btn btn-primary btn-enviar" type="submit" name="register">
                <input class="btn btn-primary btn-reset" type="reset">
            </div>
        </div>
        <?php
        include("../back_end/registro_usuario_be.php");
        ?>
    </form>

</body>

</html>
<?php

include("con_bd.php");

if (isset($_POST['register'])) {
    if (

        strlen($_POST['Numero_documento']) >= 1
        && strlen($_POST['Nombre']) >= 1
        && strlen($_POST['Apellido']) >= 1
        && strlen($_POST['Grado']) >= 1
        && strlen($_POST['Grupo']) >= 1
        && strlen($_POST['Correo']) >= 1
        && strlen($_POST['Tipo_usuario']) >= 1
        && strlen($_POST['Contraseña']) >= 1

        
    ) {

        $Numero = trim($_POST['Numero_documento']);
        $Nombre = trim($_POST['Nombre']);
        $Apellido = trim($_POST['Apellido']);
        $Grado = trim($_POST['Grado']);
        $Grupo = trim($_POST['Grupo']);
        $Correo = trim($_POST['Correo']);
        $Tipo_usuario = trim($_POST['Tipo_usuario']);
        $Contraseña = trim($_POST['Contraseña']);

        //ENCRIPTACIÓN DE CONTRASEÑA
        $Contraseña = hash('sha512', $Contraseña);

        //CONSULTA DE MYSQL PHPMYADMIN/ INSERT
        $consulta = "INSERT INTO usuarios(Numero_documento, Nombre, Apellido, Grado, Grupo, Correo, Tipo_Usuario, Contraseña) VALUES ('$Numero','$Nombre','$Apellido','$Grado','$Grupo','$Correo','$Tipo_usuario','$Contraseña')";

        //Verificar que el número de documento no se repita en la base de datos
        $verificar_numero = mysqli_query($conex, "SELECT * FROM usuarios WHERE Numero_documento='$Numero' ");

        if (mysqli_num_rows($verificar_numero) > 0) {
            echo '
            <script>
                alert("Este número de documento ya existe ¡Por favor intente con otro!");
                window.location = "../public/registro.php";
            </script>
            ';
            exit();
        }
        //Verificar que el correo no se repita en la base de datos
        $verificar_correo = mysqli_query($conex, "SELECT * FROM usuarios WHERE correo='$Correo' ");

        if (mysqli_num_rows($verificar_correo) > 0) {
            echo '
            <script>
                alert("Este correo ya se registró ¡Por favor intente con otro!");
                window.location = "../public/registro.php";
            </script>
            ';
            exit();
        }



        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            <h3 class="ok">¡Te has inscrito correctamente!</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Por favor completa los campos!</h3>
<?php
    }
}


?>
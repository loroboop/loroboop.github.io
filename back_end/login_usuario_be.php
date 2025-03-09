<?php

    session_start();

    include("con_bd.php");

    $Numero = $_POST['Numero_documento'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];
    $Contraseña = hash('sha512', $Contraseña);

    //ENTRAR Y VALIDAR EL INICIO DE SESIÓN Y NOS ENVÍE AL INICIO con $validar_login
    $validar_login = mysqli_query($conex, "SELECT * FROM usuarios WHERE Numero_documento='$Numero' and Correo='$Correo' and Contraseña='$Contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $Correo;
        header("location: ../public/foro_social.php");
        exit;
    }else{
        echo '
        <script>
             alert("Usuario no existe ¡Por favor verifique los datos!");
            window.location = "../public/inicio_sesion.php";
        </script>
        ';
        exit();
    }

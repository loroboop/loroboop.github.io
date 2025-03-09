<?php

include('con_bd.php');

if (isset($_POST['suger'])) {
    if (
        strlen($_POST['sugerencia']) >= 1
        && strlen($_POST['sugerencia']) >= 1
       
    ) {
        $sugerencia = trim($_POST['sugerencia']);
        $fecha = trim($_POST['fecha']);

        $consulta_suger = "INSERT INTO sugerencias(sugerencia, fecha) VALUES ('$sugerencia','$fecha')";
        $resul_suger = mysqli_query($conex, $consulta_suger);

        if ($consulta_suger) {
?>
            <h5x class="ok-suger">¡Has enviado correctamente tu mensaje!</h5>
        <?php
        } else {
        ?>
            <h5 class="bad-suger">¡Ups ha ocurrido un error!</h5>
        <?php
        }
    } 

    }



?>
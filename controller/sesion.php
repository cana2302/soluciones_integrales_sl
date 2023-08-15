<?php

    /*Este bloque de php verifica la sesion iniciada por el usuario,
    evitando que un usuario desconocido pueda ingresar a página introduciendo
    la URL directamente, sin antes logearse.*/

    // Reanuda sesion
    session_start();

    // Verifica si NO hay registro en la variable superglobal: 'sesion_'
    if (!(isset($_SESSION["sesion_"]))){
        //Redirigir al login (index.php)
        echo"<script language='javascript'>window.location='../index.php'</script>;";
    }

?>
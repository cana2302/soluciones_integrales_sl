<?php

    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");      
    // Incluimos el archivo 'TablasBBDD_model.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");    

    // -----------------INSERTAR REGISTRO EN BASE DE DATOS-----------------------
    $update_contrasena = $_POST['usuario2'];
    
    try {
        $objeto_TablaBBDD_model = new TablasBBDD_model;
        $objeto_TablaBBDD_model->actualizar_contrasena_usuario($_SESSION['sesion_'], $update_contrasena);
        $mensaje_consulta = "<br>Contraseña de usuario actualizada correctamente!";
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;     

    } catch (Exception $e) {   // El cath se ejecuta solo si el try no se ha podido ejecutar
        $mensaje_consulta = "<br>Error al intentar actualizar contraseña de usuario<br> Error: " . $e->getMessage();
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;

    } finally {
        $objeto_TablaBBDD_model->cerrar_conexion();
        //Redirigir al view
        echo"<script language='javascript'>window.location='../view/mensaje_consulta.php'</script>;";
    }

?>
<?php

    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");      
    // Incluimos el archivo 'TablasBBDD_model.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");    

    // -----------------INSERTAR REGISTRO EN BASE DE DATOS-----------------------
    $insertar_nombre = $_POST['usuario1'];
    $insertar_contrasena = $_POST['usuario2'];
    $insertar_privilegio = $_POST['usuario3']; 
    
    try {
        $objeto_TablaBBDD_model = new TablasBBDD_model;
        $objeto_TablaBBDD_model->insertar_nuevo_usuario($insertar_nombre, $insertar_contrasena, $insertar_privilegio);
        $mensaje_consulta = "<br>Registro insertado de forma exitosa!";
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;     

    } catch (Exception $e) {   // El cath se ejecuta solo si el try no se ha podido ejecutar
        $mensaje_consulta = "<br>Error al intentar insertar el nuevo usuario<br> Error: " . $e->getMessage();
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;

    } finally {
        $objeto_TablaBBDD_model->cerrar_conexion();
        //Redirigir al view
        echo"<script language='javascript'>window.location='../view/mensaje_consulta.php'</script>;";
    }

?>
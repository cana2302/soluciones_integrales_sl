<?php

    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");      
    // Incluimos el archivo 'TablasBBDD_model.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");   


    // -----------------INSERTAR REGISTRO EN BASE DE DATOS----------------------
    $insertar_nombre_aseguradora = $_POST['averia1'];
    $insertar_nombre_asegurado= $_POST['averia2'];
    $insertar_fecha= $_POST['averia3'];
    $insertar_descripcion= $_POST['averia4'];       
    $insertar_imagen= $_POST['averia5'];   


    try {
        $objeto_TablasBBDD_model = new TablasBBDD_model;
        $objeto_TablasBBDD_model->insertar_nueva_averia($insertar_nombre_aseguradora, $insertar_nombre_asegurado, $insertar_fecha, $insertar_descripcion, $insertar_imagen);
        $mensaje_consulta = "<br>Registro insertado de forma exitosa!";
        $_SESSION['mensaje_consulta'] = $mensaje_consulta; 

    } catch (Exception $e) {   // El cath se ejecuta solo si el try no se ha podido ejecutar
        $mensaje_consulta = "<br>Error al intentar insertar nueva reparación<br> Error: " . $e->getMessage();
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;

    } finally {
        $objeto_TablasBBDD_model->cerrar_conexion();
        //Redirigir al view
        echo"<script language='javascript'>window.location='../view/mensaje_consulta.php'</script>;";
    }

?>
        

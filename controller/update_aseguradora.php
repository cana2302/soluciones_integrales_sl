<?php

    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");      
    // Incluimos el archivo 'TablasBBDD_model.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");    

    // -----------------INSERTAR REGISTRO EN BASE DE DATOS-----------------------
    $seleccion = $_POST['aseguradora_seleccionada'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
    $nuevo_domicilio = $_POST['nuevo_domicilio'];
    $nuevo_cif = $_POST['nuevo_cif'];
    $nuevo_tel = $_POST['nuevo_tel'];
    $nuevo_mail = $_POST['nuevo_mail'];
    $nueva_persona = $_POST['nueva_persona'];
    
    try {
        $objeto_TablaBBDD_model = new TablasBBDD_model;
        $objeto_TablaBBDD_model->actualizar_aseguradora($seleccion, $nuevo_nombre, $nuevo_domicilio, $nuevo_cif, $nuevo_tel, $nuevo_mail, $nueva_persona);
        $mensaje_consulta = "<br>Datos de aseguradora actualizados correctamente!";
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;     

    } catch (Exception $e) {   // El cath se ejecuta solo si el try no se ha podido ejecutar
        $mensaje_consulta = "<br>Error al intentar actualizar datos del cliente<br> Error: " . $e->getMessage();
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;

    } finally {
        $objeto_TablaBBDD_model->cerrar_conexion();
        //Redirigir al view
        echo"<script language='javascript'>window.location='../view/mensaje_consulta.php'</script>;";
    }

?>
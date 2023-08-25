<?php

    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");      
    // Incluimos el archivo 'TablasBBDD_model.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");    

    // -----------------INSERTAR REGISTRO EN BASE DE DATOS-----------------------
    $seleccion = $_POST['asegurado_seleccionado'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
    $nueva_direccion = $_POST['nueva_direccion'];
    $nuevo_tel = $_POST['nuevo_tel'];
    $nuevo_dom_rep = $_POST['nuevo_dom_rep'];
    
    try {
        $objeto_TablaBBDD_model = new TablasBBDD_model;
        $objeto_TablaBBDD_model->actualizar_asegurado($seleccion, $nuevo_nombre, $nueva_direccion, $nuevo_tel, $nuevo_dom_rep);
        $mensaje_consulta = "<br>Datos del asegurado actualizados correctamente!";
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;     

    } catch (Exception $e) {   // El cath se ejecuta solo si el try no se ha podido ejecutar
        $mensaje_consulta = "<br>Error al intentar actualizar datos del asegurado<br> Error: " . $e->getMessage();
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;

    } finally {
        $objeto_TablaBBDD_model->cerrar_conexion();
        //Redirigir al view
        echo"<script language='javascript'>window.location='../view/mensaje_consulta.php'</script>;";
    }

?>
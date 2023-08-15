<?php

    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");      
    // Incluimos el archivo 'TablasBBDD_model.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");    

    // -----------------ELIMINAR REGISTRO EN BASE DE DATOS-----------------------
    if (isset($_POST['eliminar_seleccion']) && isset($_POST['cbox'])) {
        
        $averia_a_eliminar = $_POST['eliminar_seleccion'];
        $nombre_columna = 'id';

        try {
            $objeto_TablasBBDD_model = new TablasBBDD_model;
            $objeto_TablasBBDD_model->eliminar_registro($averia_a_eliminar, $nombre_columna, TABLA_AVERIAS);
            $mensaje_consulta = "<br>Avería eliminada de forma exitosa!";
            $_SESSION['mensaje_consulta'] = $mensaje_consulta;     
    
        } catch (Exception $e) {   // El cath se ejecuta solo si el try no se ha podido ejecutar
            $mensaje_consulta = "<br>Error al intentar eliminar el registro<br> Error: " . $e->getMessage();
            $_SESSION['mensaje_consulta'] = $mensaje_consulta;
    
        } finally {
            $objeto_TablasBBDD_model->cerrar_conexion();
            //Redirigir al view
            echo"<script language='javascript'>window.location='../view/mensaje_consulta.php'</script>;";
        }

    }
    
?>
    
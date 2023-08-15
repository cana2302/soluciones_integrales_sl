<?php

    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");      
    // Incluimos el archivo 'TablasBBDD_model.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");   

    // -----------------INSERTAR REGISTRO EN BASE DE DATOS----------------------
    $insertar_nombre = $_POST['cliente1'];
    $insertar_domicilio= $_POST['cliente2'];
    $insertar_cif= $_POST['cliente3'];
    $insertar_telefono= $_POST['cliente4'];
    $insertar_mail= $_POST['cliente5'];
    $insertar_persona= $_POST['cliente6'];
    
    try {
        $objeto_TablasBBDD_model = new TablasBBDD_model;
        $objeto_TablasBBDD_model->insertar_nuevo_cliente($insertar_nombre, $insertar_domicilio, $insertar_cif, $insertar_telefono, $insertar_mail, $insertar_persona);
        $mensaje_consulta = "<br>Registro insertado de forma exitosa!";
        $_SESSION['mensaje_consulta'] = $mensaje_consulta; 

    } catch (Exception $e) {   // El cath se ejecuta solo si el try no se ha podido ejecutar
        $mensaje_consulta = "<br>Error al intentar insertar nuevo cliente<br> Error: " . $e->getMessage();
        $_SESSION['mensaje_consulta'] = $mensaje_consulta;

    } finally {
        $objeto_TablasBBDD_model->cerrar_conexion();
        //Redirigir al view
        echo"<script language='javascript'>window.location='../view/mensaje_consulta.php'</script>;";
    }
        
?>
        


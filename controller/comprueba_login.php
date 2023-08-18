<?php

    // Incluimos el archivo 'TablasBBDD.php' para poder utilizar la clase contenida
    require_once ("../model/TablasBBDD_model.php");

    try {

        // Datos introducidos por el usuario y convertimos caracteres especiales a entidades html
        // 'addlashes' --> evitar inyeccion SQL            
        $login1=htmlentities(addslashes($_POST["login2"]));
        $contra1=htmlentities(addslashes($_POST["contra2"]));  
        
        $objeto_TablasBBDD_model = new TablasBBDD_model;
        $numero_registro = $objeto_TablasBBDD_model->verificar_usuario_y_contrasena($login1,$contra1);
        
        if ($numero_registro!=0) {  //(si el usuario existe, ...)
            //Iniciar sesion para el usuario que se acaba de logear:
            session_start();
            //Almacenar en variable superglobal el login del usuario:
            $_SESSION["sesion_"] = $_POST["login2"];
            
            //-------Obtener privilegio de usuario-------//  
            //Almacenamos el valor en variable superglobal de sesion
            $_SESSION['privilegio'] = ($objeto_TablasBBDD_model->get_privilegio_usuario($_SESSION['sesion_']));
            
            //Redirigir a página de inicio, menú principal:
            echo"<script language='javascript'>window.location='../view/principal.php'</script>;";
                    
        } else {
            //Redirigir a la propia página en caso de usuario incorrecto (index/login)
            echo"<script language='javascript'>window.location='../index.php'</script>;";
        }
    
    } catch (Exception $e) {
        die ("Error: " . $e->getMessage());

    } finally {
        $objeto_TablasBBDD_model->cerrar_conexion();
    }

?>


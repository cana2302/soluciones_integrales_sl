<?php
    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php"); 

    // Se obtienen arrays:
    require_once ("../controller/arrays_tablas.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado Asegurados</title>
        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="../view/css/listado_asegurados.css">
    </head>

    <body>
        <main>
            <br>    
            <h2>Listado de Asegurados Particulares<br></h2>
            <table class="tabla_70">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Teléfono</th>
                        <th>Domicilio de reparación</th>
                    </tr>
                </thead>
                <?php
                    foreach($array_asegurados as $elemento){
                        echo "<tbody>
                            <tr>
                                <td>";
                                    echo $elemento['nombre'] . "
                                </td>
                                <td>";
                                    echo $elemento['direccion'] . "</td>
                                <td>";
                                    echo $elemento['telefono'] . "</td>
                                <td>";
                                    echo $elemento['domicilio_rep'] . "</td>
                            </tr>
                        </tbody>";
                    }        
                ?>
            </table>

            <?php
                if ($_SESSION['privilegio']=='administrador'){
                    /*True, entoces llama al documento, para crear nueva opción: 'eliminar_asegurados' */
                    require("../view/listado_asegurados_adm.php");
                }    
            ?> 

        </main> 
    </body>
</html>
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
        <title>Listado Reparaciones</title>    
    </head>

    <body>
        <main>
            <br>    
            <h2>Listado de Reparaciones<br></h2>
            <table class="tabla_80">
                <thead>
                    <tr>
                        <th>ID reparación</th>
                        <th>Nombre Aseguradoras</th>
                        <th>Asegurado Particular</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Ruta de imágen</th>
                    </tr>
                </thead>
                <?php
                    foreach($array_averias as $elemento){
                        echo "<tbody>
                            <tr>
                                <td>";
                                    echo $elemento['id'] . "</td>
                                <td>";
                                    echo $elemento['aseguradora'] . "</td>
                                <td>";
                                    echo $elemento['asegurado'] . "</td>
                                <td>";
                                    echo $elemento['fecha'] . "</td>
                                <td>";
                                    echo $elemento['descripcion'] . "</td>
                                <td>";
                                    echo $elemento['imagen'] . "</td>
                            </tr>
                        </tbody>";
                    }        
                ?>
            </table>

            <?php
                if ($_SESSION['privilegio']=='administrador'){
                    /*True, entoces llama al documento, para crear nueva opción: 'eliminar_averias' */
                    require("../view/listado_averias_adm.php");
                }    
            ?>           
            
        </main>
    </body>
</html>
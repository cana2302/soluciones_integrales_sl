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
        <title>Listado Cliente</title>
    </head>

    <body>        
        <main>
            <br>
            <h2>Listado de CLIENTES<br></h2>
            <table class="tabla_70">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Domicilio</th>
                        <th>CIF</th>
                        <th>Teléfono</th>
                        <th>Mail</th>
                        <th>Persona de contacto</th>
                    </tr>
                </thead>
                <?php
                    foreach($array_aseguradoras as $elemento){
                        echo "<tbody>
                            <tr>
                                <td>";
                                    echo $elemento['nombre'] . "
                                </td>
                                <td>";
                                    echo $elemento['domicilio'] . "</td>
                                <td>";
                                    echo $elemento['cif'] . "</td>
                                <td>";
                                    echo $elemento['telefono'] . "</td>
                                <td>";
                                    echo $elemento['mail'] . "</td>
                                <td>";
                                    echo $elemento['persona'] . "</td>
                            </tr>
                        </tbody>";
                    }        
                ?>
            </table>

            <?php
                if ($_SESSION['privilegio']=='administrador'){
                    /*True, entoces llama al documento, para crear nueva opción: 'eliminar_aseguradora' */
                    require("../view/listado_clientes_adm.php");
                }    
            ?>   

        </main>
    </body>
</html>
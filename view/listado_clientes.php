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
        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="../view/css/listado_clientes.css">        
    </head>

    <body>
        <header>
            <?php
                require("../view/header1.php");
            ?>
        </header>
        
        <main>
            <br>
            <h2>Listado de CLIENTES<br></h2>
            <table>
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
        </main>
    </body>
</html>
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
                                    echo $elemento['id_asegurado'] . "
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

            <!-- Formulario para modificar datos de asegurados -->
            <div>
                <br>
                <h2>Formulario para actualizar datos de Asegurados</h2>
                <form action="../controller/update_asegurado.php" method="post">             
                    <table class="tabla_40">
                        <tr>
                            <td colspan="2"><label>&nbsp</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="opciones" class="izq">Seleccionar Asegurado:</label>
                                <select name="asegurado_seleccionado" class="der">
                                <?php
                                    foreach($array_asegurados as $elemento){
                                        echo "<option value='" . $elemento['id_asegurado'] . "'>" . $elemento['id_asegurado'] . "</option>";
                                    }
                                ?>   
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><label>&nbsp</label></td>
                        </tr>
                        <tr>
                            <td class="izq"><label>Nuevo nombre:</label></td>
                            <td class="der"><input type="text" name="nuevo_nombre" required maxlength="40"/></td>
                        </tr>
                        <tr>
                            <td class="izq"><label>Nueva dirección:</label></td>
                            <td class="der"><input type="text" name="nueva_direccion" required maxlength="40"/></td>
                        </tr>  
                        <tr>
                            <td class="izq"><label>Nuevo teléfono:</label></td>
                            <td class="der"><input type="text" name="nuevo_tel" required maxlength="25"/></td>
                        </tr>    
                        <tr>
                            <td class="izq"><label>Nuevo domicilio de reparación:</label></td>
                            <td class="der"><input type="text" name="nuevo_dom_rep" required maxlength="40"/></td>
                        </tr>                         
                        <tr>
                            <td>&nbsp&nbsp&nbsp&nbsp</td>
                        </tr>                        
                        <tr>
                            <td colspan="2">
                                <input type="checkbox" name="cbox" value="confirmacion" required/>
                                <label for="cbox">Estoy de acuerdo</label>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp&nbsp&nbsp&nbsp</td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="enviando" value="   Actualizar   "></td>
                        </tr>
                        <tr>
                            <td>&nbsp&nbsp&nbsp&nbsp</td>
                        </tr>
                    </table>
                </form>
                <br>
            </div>  

            <?php
                if ($_SESSION['privilegio']=='administrador'){
                    /*True, entoces llama al documento, para crear nueva opción: 'eliminar_asegurados' */
                    require("../view/listado_asegurados_adm.php");
                }    
            ?> 

        </main> 
    </body>
</html>
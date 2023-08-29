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
                                    echo $elemento['id_aseguradora'] . "
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


            <!-- Formulario para modificar datos aseguradoras -->
            <div>
                <br>
                <h2>Formulario para actualizar datos de Cliente</h2>
                <form action="../controller/update_aseguradora.php" method="post">             
                    <table class="tabla_40">
                        <tr>
                            <td colspan="2"><label>&nbsp</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="opciones" class="izq">Seleccionar Aseguradora:</label>
                                <select name="aseguradora_seleccionada" class="der">
                                <?php
                                    foreach($array_aseguradoras as $elemento){
                                        echo "<option value='" . $elemento['id_aseguradora'] . "'>" . $elemento['id_aseguradora'] . "</option>";
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
                            <td class="der"><input type="text" name="nuevo_nombre" required maxlength="35"/></td>
                        </tr>
                        <tr>
                            <td class="izq"><label>Nuevo domicilo:</label></td>
                            <td class="der"><input type="text" name="nuevo_domicilio" required maxlength="40"/></td>
                        </tr>
                        <tr>
                            <td class="izq"><label>Nuevo CIF:</label></td>
                            <td class="der"><input type="text" name="nuevo_cif" required maxlength="25"/></td>
                        </tr>   
                        <tr>
                            <td class="izq"><label>Nuevo Telefono:</label></td>
                            <td class="der"><input type="text" name="nuevo_tel" required maxlength="25"/></td>
                        </tr>    
                        <tr>
                            <td class="izq"><label>Nuevo Mail:</label></td>
                            <td class="der"><input type="text" name="nuevo_mail" required maxlength="40"/></td>
                        </tr>           
                        <tr>
                            <td class="izq"><label>Nueva persona de contacto:</label></td>
                            <td class="der"><input type="text" name="nueva_persona" required maxlength="35"/></td>
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
                    /*True, entoces llama al documento, para crear nueva opción: 'eliminar_aseguradora' */
                    require("../view/listado_clientes_adm.php");
                }    
            ?>   

        </main>
    </body>
</html>
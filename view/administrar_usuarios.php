<!DOCTYPE html>
<html lang="en">

<!-- Tabla con usuarios activos -->
<div>
    <br>
    <h2>Listado de USUARIOS activos<br></h2>
    <table class="tabla_50">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Permisos</th>
            </tr>
        </thead>
        <?php
            foreach($array_usuarios as $elemento){
                echo "<tbody>
                    <tr>
                        <td>";
                            echo $elemento['ID'] . "
                        </td>
                        <td>";
                            echo $elemento['USUARIOS'] . "</td>
                        <td>";
                            echo $elemento['CONTRA'] . "</td>
                        <td>";
                            echo $elemento['privilegio'] . "</td>
                    </tr>
                </tbody>";
            }        
        ?>
    </table>
</div>
        
<!-- Formulario para agregar nuevo usuario -->
<div>
    <br>
    <h2>Formulario para registrar nuevos USUARIOS</h2>
    <form action="../controller/administrar_usuarios1.php" method="post">             
        <table class="tabla_30">
            <tr>
                <td colspan="2"><label>&nbsp</label></td>
            </tr>
            <tr>
                <td class="izq"><label for="nombre">Nombre de Usuario:</label></td>
                <td class="der"><input type="text" name="usuario1" id="nombre" required maxlength="99"/></td>
            </tr>
            <tr>
                <td class="izq"><label for="contraseña">Contraseña:</label></td>
                <td class="der"><input type="text" name="usuario2" id="contraseña" required maxlength="99"/></td>
            </tr>
            <tr>
                <td class="izq"><label for="privilegio">Permiso:</label></td>
                <td class="der">
                    <input type="radio" name="usuario3" value="administrador">Administrador
                    <input type="radio" name="usuario3" value="usuario" checked>Usuario
                </td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviando" value="   Registrar   "></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp</td>
            </tr>
        </table>
    </form>
    <br>
</div>

<!-- Formulario para seleccionar y eliminar usuario -->
<div>
    <h2>Eliminar USUARIO</h2>
    <form action="../controller/administrar_usuarios2.php" method="post">
        <table class="tabla_30">
            <tr>
                <td colspan="2"><label>&nbsp</label></td>
            </tr>
            <tr>
                <td>
                    <label for="opciones">Seleccionar usuario:</label>
                    <select name="eliminar_seleccion">
                    <?php
                        foreach($array_usuarios as $elemento){
                            if ($elemento['USUARIOS'] != 'admin') {
                                echo "<option value='" . $elemento['USUARIOS'] . "'>" . $elemento['USUARIOS'] . "</option>";
                            }else {
                                    echo "<option value='no_seleccionado'>usuario no seleccionado</option>";
                            }
                        }
                    ?>   
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="cbox" value="confirmacion" required/>
                    <label for="cbox">Estoy de acuerdo</label>
                </td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp</td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Eliminar"> 
                </td>
            </tr>                  
        </table>                   
    </form>
</div>

</html>
<br>
<!-- Formulario para seleccionar y eliminar asegurado -->
<div>
    <h2>Eliminar Asegurado</h2>
    <form action="../controller/eliminar_asegurados.php" method="post">
        <table class="tabla_30">
            <tr>
                <td colspan="2"><label>&nbsp</label></td>
            </tr>
            <tr>
                <td>
                    <label for="opciones">Seleccionar Asegurado:</label>
                    <select name="eliminar_seleccion">
                    <?php
                        foreach($array_asegurados as $elemento){
                            echo "<option value='" . $elemento['id_asegurado'] . "'>" . $elemento['id_asegurado'] . "</option>";
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
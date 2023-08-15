<br>
<!-- Formulario para seleccionar y eliminar aseguradora/cliente -->
<div>
    <h2>Eliminar Aseguradora</h2>
    <form action="../controller/eliminar_aseguradora.php" method="post">
        <table class="tabla1">
            <tr>
                <td colspan="2"><label>&nbsp</label></td>
            </tr>
            <tr>
                <td>
                    <label for="opciones">Seleccionar Aseguradora:</label>
                    <select name="eliminar_seleccion">
                    <?php
                        foreach($array_aseguradoras as $elemento){
                            echo "<option value='" . $elemento['nombre'] . "'>" . $elemento['nombre'] . "</option>";
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
<br>
<!-- Formulario para seleccionar y eliminar avería -->
<div>
    <h2>Eliminar Avería</h2>
    <form action="../controller/eliminar_averia.php" method="post">
        <table class="tabla_30">
            <tr>
                <td colspan="2"><label>&nbsp</label></td>
            </tr>
            <tr>
                <td>
                    <label for="opciones">Seleccionar ID de reparación:</label>
                    <select name="eliminar_seleccion">
                    <?php
                        foreach($array_averias as $elemento){
                            echo "<option value='" . $elemento['id'] . "'>" . $elemento['id'] . "</option>";
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
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
        <title>Nueva Avería</title>
        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="../view/css/formulario_averias.css">
    </head>

    <body>
        <header>
            <?php
                require("../view/header1.php");
            ?>
        </header>
        <main>
            <br>
            <h2>Formulario para ingresar nueva AVERÍA</h2>
            <form action="../controller/formulario_averias1.php" method="post">                
                <table class="tabla_60">
                    <tr>
                        <td colspan="2"><label>&nbsp</label></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="nombre">Nombre Aseguradora</label></td>
                        <td class="der"><input autofocus list="listado_clientes" name="averia1" required maxlength="99"/>
                            <datalist id="listado_clientes">
                                <?php
                                    foreach($array_nombres_aseguradoras as $elemento){
                                        echo "<option value='" . $elemento['nombre'] . "'></option>";
                                    }        
                                ?>  
                        </td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="aseguradora">Asegurado Particular</label></td>
                        <td class="der"><input list="listado_asegurados" name="averia2" required maxlength="99"/>
                            <datalist id="listado_asegurados">
                                <?php
                                    foreach($array_nombres_asegurados as $elemento){
                                        echo "<option value='" . $elemento['nombre'] . "'></option>";
                                    }        
                                ?>  
                        </td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="fecha">Fecha</label></td>
                        <td class="der"><input type="date" name="averia3" id="fecha" required/></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="desc">Descripción</label></td>
                        <td class="der"><textarea name="averia4" id="desc" cols="72" rows="12" required maxlength="749"></textarea></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="foto">Imágen</label></td>
                        <td class="der"><input type="file" name="averia5" id="foto" maxlength="99"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="enviando" value=" Enviar "></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                </table>
            </form>
        </main>
    </body>
</html>
<?php
    require("../controller/sesion.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo Asegurado</title>
        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="../view/css/formulario_asegurados.css">
    </head>

    <body>
        <header>
            <?php
                require("../view/header1.php");
            ?>
        </header>

        <main>
            <br>
            <h2>Formulario para ingresar nuevos ASEGURADOS</h2>
            <form action="../controller/formulario_asegurados1.php" method="post">             
                <table class="tabla_40">
                    <tr>
                        <td colspan="2"><label>&nbsp</label></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="nombre">Nombre Asegurado:</label></td>
                        <td class="der"><input autofocus type="text" name="asegurado1" id="nombre" required maxlength="99"/></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="direccion">Dirección:</label></td>
                        <td class="der"><input type="text" name="asegurado2" id="direccion" required maxlength="99"/></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="tel">Teléfono:</label></td>
                        <td class="der"><input type="text" name="asegurado3" id="tel" required maxlength="20" pattern="^(?:\+)?\d{8,12}$" title="Introduce solo números"/></td>
                    </tr>

                    <tr> 
                        <td class="izq"><label for="rep">Domicilio de reparación:</label></td>
                        <td class="der"><input type="text" name="asegurado4" id="rep" required maxlength="99"/></td> 
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="enviando" value="   Enviar   "></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                </table>
            </form>
        </main>
    </body>
</html>
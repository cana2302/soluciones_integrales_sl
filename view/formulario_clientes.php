<?php
    require_once ("../controller/sesion.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Cliente</title>
        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="../view/css/formulario_clientes.css">        
    </head>

    <body>
        <header>
            <?php
                require("../view/header1.php");
            ?>
        </header>
 
        <main>
            <br>
            <h2>Formulario para ingresar nuevos CLIENTES</h2>
            <form action="../controller/formulario_cliente1.php" method="post">                
                <table class="tabla_40">
                    <tr>
                        <td colspan="2"><label>&nbsp</label></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="nombre">Nombre Aseguradora:</label></td>
                        <td class="der"><input autofocus type="text" name="cliente1" id="nombre" required maxlength="99"/></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="domicilio">Domicilio:</label></td>
                        <td class="der"><input type="text" name="cliente2" id="domicilio" required maxlength="99"/></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="cif">CIF:</label></td>
                        <td class="der"><input type="text" name="cliente3" id="cif" required maxlength="99"/></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="tel">Teléfono:</label></td>
                        <td class="der"><input type="text" name="cliente4" id="tel" required maxlength="99" pattern="[0-9+\s+()]+" title="Introduce solo números"/></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="mail">Mail:</label></td>
                        <td class="der"><input type="email" name="cliente5" id="mail" required maxlength="99"></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="persona">Persona de contacto:</label></td>
                        <td class="der"><input type="text" name="cliente6" id="persona" required maxlength="99"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="enviando" value="  Enviar  "></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                </table>
            </form>
        </main>        
    </body>
</html>
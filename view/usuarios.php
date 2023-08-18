<?php
    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php"); 

    // Se obtiene el array usuarios:
    require_once ("../controller/arrays_tablas.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrar Usuarios</title>
        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="../view/css/administrar_usuarios.css">
    </head>
    <body>
        <header>
            <?php
                require("../view/header1.php");
            ?>
        </header>
        <main>
                    
            <!-- Formulario para modificar contraseña de usuario -->
            <div>
                <br>
                <h2>Formulario para modificar contraseña de USUARIO</h2>
                <form action="../controller/usuarios1.php" method="post">             
                    <table class="tabla1">
                        <tr>
                            <td colspan="2"><label>&nbsp</label></td>
                        </tr>
                        <tr>
                            <td class="izq"><label for="nombre">Nombre de Usuario:</label></td>
                            <td class="der"><label for="nombre"><?php echo $_SESSION["sesion_"] ?></label></td>
                        </tr>
                        <tr>
                            <td class="izq"><label for="contraseña">Nueva contraseña:</label></td>
                            <td class="der"><input type="text" name="usuario2" id="contraseña" required maxlength="25"/></td>
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
                    /*True, entoces llama al documento, para crear nuevas opciones 'administar usuarios' */
                    require("../view/administrar_usuarios.php");
                }    
            ?>              

        </main>    
    </body>
</html>
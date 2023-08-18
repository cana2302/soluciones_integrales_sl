<?php
    // Incluimos el archivo 'sesion.php' para comprobar la sesion iniciada
    require_once ("../controller/sesion.php");  
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuarios</title>
    </head>

    <body>
        <header>
            <?php
                require("../view/header1.php");
            ?>
        </header> 

        <main>
            <?php

                if (isset($_SESSION["mensaje_consulta"])) {
                    echo "<br><br>";
                    echo '<h2>' . $_SESSION["mensaje_consulta"] . '</h2>';
                    unset($_SESSION["mensaje_consulta"]); // Limpia la variable de sesión para que el mensaje solo se muestre una vez.
                }

            ?>
        </main>
    </body>
    
</html>
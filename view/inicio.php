<?php
    require ('../controller/sesion.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <!--Hoja de estilos-->
        <link rel="stylesheet" type="text/css" href="../view/css/inicio.css">
        <!--Libreria Jquery-->
        <script src="../view/assets/Jquery/jquery-3.7.0.min.js"></script>
        <script src="../view/js/script_imagenes.js"></script>
    </head>

    <body>
        <header>
            <?php
                require ("../view/header.php");
            ?>
        </header>
        <main>
            <div class="foto" id="arriba">
                <div class="img">
                    <a href='formulario_clientes.php'><img src="../view/assets/img/form_cliente.png" alt="formulario clientes" width="75%" height="75%" id="img1"></a>
                </div>                        
                <div class="img">
                    <a href="formulario_asegurados.php"><img src="../view/assets/img/form_asegurado.png" alt="formulario asegurados" width="75%" height="75%"></a> 
                </div>               
                <div class="img">
                    <a href="formulario_averias.php"><img src="../view/assets/img/form_averia.png" alt="formulario reparaciones" width="75%" height="75%"></a>
                </div>
            </div>
            <div class="foto">
                <div class="img">
                    <a href="listado_clientes.php"><img src="../view/assets/img/list_aseguradoras.png" alt="lista clientes" width="75%" height="75%"></a> 
                </div>                        
                <div class="img">
                    <a href="listado_asegurados.php"><img src="../view/assets/img/list_asegurados.png" alt="lista asegurados" width="75%" height="75%"></a>
                </div>
                <div class="img">
                    <a href="listado_averias.php"><img src="../view/assets/img/list_averias.png" alt="lista averias" width="75%" height="75%"></a>
                </div>
            </div>
        </main> 

        <footer>
            <h4 style="text-align: center;">
                <script src="../view/js/script_fecha.js"></script>    
            </h4>
        </footer>

    </body>
</html>
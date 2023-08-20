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
    </head>

    <body>
        <main>
            <script>
                $(document).ready(function(){
                    $(".img").hide().fadeIn(5000); //retardo aparición de imgenes en body                
                });
            </script>
            <div class="foto" id="arriba">
                <div class="img">
                    <a href='../view/formulario_clientes.php'><img src="../view/assets/img/form_cliente.png" alt="formulario clientes" width="75%" height="75%" id="img1"></a>
                </div>                        
                <div class="img">
                    <a href="../view/formulario_asegurados.php"><img src="../view/assets/img/form_asegurado.png" alt="formulario asegurados" width="75%" height="75%"></a> 
                </div>               
                <div class="img">
                    <a href="../view/formulario_averias.php"><img src="../view/assets/img/form_averia.png" alt="formulario reparaciones" width="75%" height="75%"></a>
                </div>
            </div>
            <div class="foto">
                <div class="img">
                    <a href="../view/listado_clientes.php"><img src="../view/assets/img/list_aseguradoras.png" alt="lista clientes" width="75%" height="75%"></a> 
                </div>                        
                <div class="img">
                    <a href="../view/listado_asegurados.php"><img src="../view/assets/img/list_asegurados.png" alt="lista asegurados" width="75%" height="75%"></a>
                </div>
                <div class="img">
                    <a href="../view/listado_averias.php"><img src="../view/assets/img/list_averias.png" alt="lista averias" width="75%" height="75%"></a>
                </div>
            </div>
        </main> 

    </body>
</html>
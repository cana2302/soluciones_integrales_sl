<?php
    require ('../controller/sesion.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soluciones Integrales</title>
        <!-- Enlace hoja de estilos -->
        <link rel="stylesheet" type="text/css" href="../view/css/principal.css">
        <!--Libreria Jquery-->
        <script src="../view/assets/Jquery/jquery-3.7.0.min.js"></script>
        <script>
			$(document).ready(function() {

                /*cargarContenidoInicial();*/

                function cargarContenidoInicial() {
                    var url = '../view/inicio.php';
                    cargarContenido(url);
                    $("ul#menu li a").removeClass("active");
                    $("ul#menu li a#inicio").addClass("active");
                }

                function cargarContenido(url) {
                    $("#contenido").load(url + " main", function(){
                        $("#contenido .img").hide().fadeIn(5000);
                    });     
                }

            	// utilizamos un selector desendiente, con una función anónima:
                $("#menu a").click(function() {
                    // creamos una variable que almacena el atributo href del elemento (this)                    
                    var url = $(this).attr("href");
                    cargarContenido(url);
                    $("ul#menu li a").removeClass("active");
                    $(this).addClass("active");
                    //utilizamor retun false para anular el vinculo default del elemento a (href)
                    return false;
                });

                $("#contenido").on("click", "img", function() {
                    var nuevaPagina = $(this).parent("a").attr("href");

                    $("ul#menu li a").removeClass("active");

                    // Comparación y modificación de estilo
                    $("ul#menu li a").each(function() {
                        if ($(this).attr("href") === nuevaPagina) { 
                            $(this).addClass("active");
                        } 
                    });
                    cargarContenido(nuevaPagina);
                    return false;
                });
                
			}); 
		</script>
    </head>

    <body>
        <header>
            <!-- Contenedor superior: USUARIO-PERMISO-CERRAR SESION -->
            <div class="contenedor_general_superior_usuario">
                <div>
                    <img id="img_icono_usuario" src="../view/assets/img/profile1.png" alt="icono_usuario">
                </div>
                <div class="contenedor_usuario_permiso">
                    <p class="label_izquierda">Nombre de usuario:</p>
                    <p class="label_derecha"><?php echo $_SESSION["sesion_"];?></p>
                </div>
                <div class="contenedor_usuario_permiso">
                    <p class="label_izquierda">Permiso:</p>
                    <p class="label_derecha"><?php echo $_SESSION['privilegio']; ?></p>
                </div>
                <div>
                    <p id="boton_cerrar_sesion"><?php echo "<a href='../controller/cierre_sesion.php' style='text-decoration: none; color: #FFFFFF;'>Cerrar Sesion</a>"; ?></p>
                </div>
            </div>

            <!-- imagen superior: SOLUCIONES INTEGRALES SL -->
            <img src="../view/assets/img/portada4.png" id="img_portada"/>

            <!-- Menú de navegación: INICIO - NUEVO CLIENTE - NUEVO ASEGURADO - etc.. -->
            <nav>
                <ul id="menu">
                    <li><a id="inicio" href='../view/inicio.php'>INICIO</a></li>
                    <li><a href='../view/formulario_clientes.php'>NUEVO CLIENTE</a></li>
                    <li><a href='../view/formulario_asegurados.php'>NUEVO ASEGURADO</a></li>
                    <li><a href='../view/formulario_averias.php'>NUEVA AVERÍA</a></li>
                    <li><a href='../view/listado_clientes.php'>LISTADO CLIENTES</a></li>
                    <li><a href='../view/listado_asegurados.php'>LISTADO ASEGURADOS</a></li>
                    <li><a href='../view/listado_averias.php'>LISTADO AVERIAS</a></li>
                    <li><a href='../view/usuarios.php'>USUARIOS</a> </li>
                </ul>                
            </nav>
        </header>


        <main id="contenido">
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
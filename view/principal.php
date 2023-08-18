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
				
				// utilizamos un selector desendiente, con una función anónima:
				$("#menu a").click (function(){ //al hacer click sobre estos elementos:
					// creamos una variable que almacena el atributo href (del elemento this)
					var url = $(this).attr("href");
					//seleccionamos el div y cargamos un div especifico de otra pagina html
					$("#contenido").load(url + " main");
					//utilizamor retun false para anular el vinculo default del elemento a (href)
					return false;
				}); 
                // Función que remueve y add clase css al hacer click al elemento
                $("ul#menu li a").click(function() {
                    $("ul#menu li a").removeClass("active");
                    $(this).addClass("active");
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
                    <li><a class="opciones_menu_nav" href='../view/inicio.php'>INICIO</a></li>
                    <li><a class="opciones_menu_nav" href='../view/formulario_clientes.php'>NUEVO CLIENTE</a></li>
                    <li><a class="opciones_menu_nav" href='../view/formulario_asegurados.php'>NUEVO ASEGURADO</a></li>
                    <li><a class="opciones_menu_nav" href='../view/formulario_averias.php'>NUEVA AVERÍA</a></li>
                    <li><a class="opciones_menu_nav" href='../view/listado_clientes.php'>LISTADO CLIENTES</a></li>
                    <li><a class="opciones_menu_nav" href='../view/listado_asegurados.php'>LISTADO ASEGURADOS</a></li>
                    <li><a class="opciones_menu_nav" href='../view/listado_averias.php'>LISTADO AVERIAS</a></li>
                    <li><a class="opciones_menu_nav" href='../view/usuarios.php'>USUARIOS</a> </li>
                </ul>                
            </nav>
        </header>

        <!-- En el elemento 'main' colocaremos información sin recargar la pag. (ajax) -->
        <main id="contenido">

        </main>   

    </body>
</html>
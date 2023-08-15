<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <!-- Enlace hoja de estilos -->
        <link rel="stylesheet" type="text/css" href="../view/css/header1.css">
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
                <a class="opciones_menu_nav" href='../view/inicio.php'></a>
                <a class="opciones_menu_nav" href='../view/formulario_clientes.php'></a>
                <a class="opciones_menu_nav" href='../view/formulario_asegurados.php'></a>
                <a class="opciones_menu_nav" href='../view/formulario_averias.php'></a>
                <a class="opciones_menu_nav" href='../view/listado_clientes.php'></a>
                <a class="opciones_menu_nav" href='../view/listado_asegurados.php'></a>
                <a class="opciones_menu_nav" href='../view/listado_averias.php'></a>
                <a class="opciones_menu_nav" href='../view/usuarios.php'>USUARIOS</a>                  
            </nav>
        </header>   

    </body>
</html>
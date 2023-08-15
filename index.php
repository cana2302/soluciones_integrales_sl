<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Enlace hoja de estilos -->
        <link rel="stylesheet" type="text/css" href="./view/css/index.css">
    </head>

    <body>
        <header>
            <img src="./view/assets/img/portada4.png" id="img_portada"/>
        </header>

        <main>            
            <h3><br>Introduce tus datos</h3>
            <div id="login">
                <br>
                <form action="./controller/comprueba_login.php" method="post">
                    <table>
                        <tr>
                            <td><label>&nbsp</label></td>
                        </tr>
                        <tr>
                            <td class="label_izquierda">Login:</td><td class="input_derecha"><input autofocus type="text" name="login2" required maxlength="20"></td>
                        </tr>
                        <tr>
                            <td class="label_izquierda">Password:</td><td class="input_derecha"><input type="password" name="contra2" required maxlength="20"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="enviar1" value=" INGRESAR "></td>
                        </tr>
                        <tr>
                            <td><label>&nbsp</label></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div>
                <br><br>
                <p>Para poder utilizar la aplicación, deberá contar con un USUARIO registrado.</p>
                <p>En caso de no contar con un 'usuario' y 'contraseña', deberá contactar al administrador.</p>
                <p>En caso de haber olvidado 'usuario' y/o 'contraseña', deberá contactar al administrador.</p>
            </div>
        </main>
    </body>
</html>
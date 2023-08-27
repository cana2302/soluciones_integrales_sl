<?php
    /*
     En este bloque php definimos constantes relacionadas con la base de datos.
     Tanto de conexion, como nombre de las tablas.
     De esta manera, facilitamos el trabajo de mantención de la aplicación web.
    */

    // Conexion a BASE DE DATOS:
    define('DB_HOST','localhost');
    define('DB_USUARIO','root');
    define('DB_CONTRA','34933717');
    define('DB_NOMBRE','bbdd__soluciones_integrales');  //nombre base de datos
    define('DB_CHARSET','utf8mb4');    //acentos y caracteres latinos
    define('DB_COLLATE','utf8mb4_unicode_ci'); // colación

    // Nombre de las tablas:
    // constante: (nombre utilizado en la aplicación web --- nombre de la tabla en la bbdd)
    define('TABLA_ASEGURADORAS','tabla_aseguradoras');
    define('TABLA_ASEGURADOS','tabla_asegurados');
    define('TABLA_AVERIAS','tabla_averias');
    define('TABLA_USUARIOS','tabla_usuarios');

?>
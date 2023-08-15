<?php

    // Incluimos el archivo 'config.php' para acceder a constantes definidas
    require_once ("../model/config.php");

    class Conexion {
        public $conexion_db;

        // Constructor de la clase:
        public function Conexion() {
            try {
                // Configuramos la conexión utilizando las constantes definidas en 'config.php'
                $this->conexion_db = new PDO ("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE, DB_USUARIO, DB_CONTRA);

                // Configuramos el modo de error de PDO para que lance excepciones:
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Establecemos juego de caracteres a utilizar en la bbdd
                $this->conexion_db->exec('SET NAMES ' . DB_CHARSET . ' COLLATE ' . DB_COLLATE);
                
            } catch (PDOException $e) {
                // En caso de error al conectar a la base de datos, se muestra un mensaje y el error
                echo "Fallo al conectar a la base de datos.<br>";
                echo "Error: " . $e->getMessage();
                return;
            }
        }

        // Función para cerrar la conexión con la base de datos
        public function cerrar_conexion() {
            // Cerrar la conexión del objeto
            $this->conexion_db = null;
        }
    }

?>
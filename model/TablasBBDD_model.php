<?php

    //Obtenemos código del archivo 'conexion.php'
    require ("../model/Conexion.php");

    class TablasBBDD_model extends Conexion {  //Clase heredada de la clase Conexion

        //Metodo constructor:
        public function __construct() {
            parent::Conexion(); //constructor padre (conexion.php)
        }

        //Función que entrega un array con todos los valores obtenidos de la TABLA parametro        
        public function get_valores_tabla(string $tabla_parametro) {
            $stmt = $this->conexion_db->prepare("SELECT * FROM " . $tabla_parametro);
            $stmt->execute();
            $valores_tabla = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $valores_tabla;
        }

        //Fución que entrega un array con todos los valores de la columna: 'nombre' de la TABLA parametro
        public function get_valores_nombres(string $tabla_parametro) {
            $stmt = $this->conexion_db->prepare("SELECT nombre FROM " . $tabla_parametro);
            $stmt->execute();
            $valores_nombre = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $valores_nombre;
        }//Luego el array se utilizará como sugerencia en un elemento datalist, dentro de un formulario

        //Función para comprobar usuario y contraseña en la base de datos. Entrega un número
        public function verificar_usuario_y_contrasena(string $usuario, string $contra){
            $stmt = $this->conexion_db->prepare("SELECT * FROM " . TABLA_USUARIOS . " WHERE USUARIOS= :login2 AND CONTRA= :contra2");
            $stmt->bindValue(':login2',$usuario, PDO::PARAM_STR);
            $stmt->bindValue(':contra2',$contra, PDO::PARAM_STR);
            $stmt->execute();
            $numero_registro = $stmt->rowCount();
            return $numero_registro;
        }

        //Función que entrega un string con valor de la columna 'privilegio' que coincida con el 'usuario' parametro
        public function get_privilegio_usuario(string $usuario){
            $stmt = $this->conexion_db->prepare("SELECT privilegio FROM " . TABLA_USUARIOS . " WHERE USUARIOS = :usuario");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado['privilegio'];
        }

        //Funcion para insertar nuevo registro de usuario en la base de datos
        public function insertar_nuevo_usuario($nombre, $contra, $privilegio){
            $stmt = $this->conexion_db->prepare("INSERT INTO " . TABLA_USUARIOS . " (USUARIOS, CONTRA, privilegio) VALUES (:nombre, :contra, :permiso)");
            $stmt->execute(array(":nombre"=>$nombre,":contra"=>$contra,":permiso"=>$privilegio));
        }

        //Función para eliminar usuario de la base de datos
        public function eliminar_usuario($nombre_usuario){
            $stmt = $this->conexion_db->prepare("DELETE FROM " . TABLA_USUARIOS. " WHERE USUARIOS=:usuario");
            $stmt->execute(array(":usuario"=>$nombre_usuario));                        
        }

        //Función para insertar nuevo asegurado en la base de datos
        public function insertar_nuevo_asegurado($nombre, $direccion, $telefono, $domicilio){
            $stmt = $this->conexion_db->prepare("INSERT INTO " . TABLA_ASEGURADOS . " (nombre, direccion, telefono, domicilio_rep) VALUES (:nombre, :dir, :tel, :rep)");
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':dir', $direccion, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $telefono, PDO::PARAM_STR);
            $stmt->bindParam(':rep', $domicilio, PDO::PARAM_STR);
            $stmt->execute();
        }

        //Función para insertar nueva aseguradora en la base de datos
        public function insertar_nuevo_cliente($nombre, $domicilio, $cif, $telefono, $mail, $persona){
            $stmt = $this->conexion_db->prepare("INSERT INTO " . TABLA_ASEGURADORAS . " (nombre, domicilio, cif, telefono, mail, persona) VALUES (:nombre, :domicilio, :cif, :telefono, :mail, :persona)");
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':domicilio', $domicilio, PDO::PARAM_STR);
            $stmt->bindParam(':cif', $cif, PDO::PARAM_STR);
            $stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
            $stmt->bindParam(':persona', $persona, PDO::PARAM_STR);
            $stmt->execute();
        }

        //Función para insertar nueva reparación en la base de datos
        public function insertar_nueva_averia($aseguradora, $asegurado, $fecha, $descripcion, $ruta_imagen){
            $stmt = $this->conexion_db->prepare("INSERT INTO " . TABLA_AVERIAS . " (aseguradora, asegurado, fecha, descripcion, imagen) VALUES (:nombre_aseguradora, :nombre_asegurado, :fecha, :descripcion, :ruta)");
            $stmt->bindParam(':nombre_aseguradora', $aseguradora, PDO::PARAM_STR);
            $stmt->bindParam(':nombre_asegurado', $asegurado, PDO::PARAM_STR);
            $stmt->bindParam(':fecha', $fecha, PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(':ruta', $ruta_imagen, PDO::PARAM_STR);
            $stmt->execute();
        }

    }

?>
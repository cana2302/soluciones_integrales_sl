<?php

    require_once ("../model/TablasBBDD_model.php");
        
    // Se crea una instancia de la clase TablasBBDD_model 
    $objeto_TablasBBDD_model = new TablasBBDD_model();

    // Se almacenan los valores obtenidos de las tablas en arrays:      
    $array_usuarios     = $objeto_TablasBBDD_model -> get_valores_tabla (TABLA_USUARIOS);
    $array_averias      = $objeto_TablasBBDD_model -> get_valores_tabla (TABLA_AVERIAS);
    $array_asegurados   = $objeto_TablasBBDD_model -> get_valores_tabla (TABLA_ASEGURADOS);
    $array_aseguradoras = $objeto_TablasBBDD_model -> get_valores_tabla (TABLA_ASEGURADORAS);

    $array_nombres_asegurados   = $objeto_TablasBBDD_model -> get_valores_nombres (TABLA_ASEGURADOS, "id_asegurado");
    $array_nombres_aseguradoras = $objeto_TablasBBDD_model -> get_valores_nombres (TABLA_ASEGURADORAS, "id_aseguradora");
    
    //Cerramos conexion con la bbdd
    $objeto_TablasBBDD_model->cerrar_conexion();

?>
<?php

use App\Categoria;

/**
 * Obtiene la categoría padre
 */
function getParent($categoria){
    if($categoria->parent_id != null){
        return Categoria::where("id",$categoria->parent_id)->withTrashed()->first()->nombre;
    }
    return "-";
}

/**
 * Permite obtener y descomprimir las URLs de las imágenes
 *
 */
function getUrlImagen($imagen, $tamano){
    $imagen_array = json_decode(stripslashes($imagen));
    $url = "";
    if(isset($imagen_array->$tamano)){
        $url = url("imagenes". $imagen_array->$tamano);
    }
    return $url;
}

/**
 * Permite validar si una clave de json existe en los productos
 *
 */
function validarJson($data, $clave_json){
    $json_obj = json_decode(stripslashes($data->filtros));
    $res = false;
    if(isset($json_obj->$clave_json)){
        if($json_obj->$clave_json){
            $res = true;
        }else{
            $res = false;
        }
    }
    return $res;
}

/**
 * Obtiene el formato de moneda
 */
function getMoneda($precio){
    return "S/". number_format($precio,2);
}

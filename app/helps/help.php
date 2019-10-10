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

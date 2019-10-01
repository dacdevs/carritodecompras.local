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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index(Request $request){

        $categorias = Categoria::all();
        if($request->has("lista") && $request->input("lista") == "archivados"){
            $categorias = Categoria::onlyTrashed()->get();
        }

        return view('admin.categorias.index')->with(array(
            "categorias" => $categorias,
        ));
    }

    public function create(){
        $categorias = Categoria::all();

        return view('admin.categorias.create')->with(array(
            "categorias" => $categorias,
        ));
    }

    public function edit($id,Request $request){

        $categoria = Categoria::withTrashed()->where("id",$id)->first();
        $categorias = Categoria::all();

        if($request->has("accion")){
            $categoria->restore();
            return redirect()->route("categorias.index");
        }

        return view('admin.categorias.create')->with(array(
            "categorias" => $categorias,
            "categoria" => $categoria,
        ));
    }

    public function store(Request $request){

        $categoria = new Categoria();
        if($request->has("id")){
            $categoria = Categoria::find($request->input("id"));
        }

        $categoria->nombre = $request->input("nombre");
        if($request->has("categoria_padre")){
            $categoria->parent_id = $request->input("categoria_padre");
        }

        if($request->has("descripcion")){
            $categoria->descripcion = $request->input("descripcion");
        }

        if($categoria->save()){
            return redirect()->route("categorias.index");
        }
    }

    public function destroy($id,Request $request){
        $categoria = Categoria::withTrashed()->where("id",$id)->first();
        if($request->has("eliminar")){
            $categoria->forceDelete();
        }else{
            $categoria->delete();
        }

        return redirect()->route("categorias.index");
    }
}


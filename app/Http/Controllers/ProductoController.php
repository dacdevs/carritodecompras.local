<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProductoController extends Controller
{

    private $data = array();

    public function __construct()
    {
        $this->data["route"] = "productos";
    }

    public function index(Request $request){

        $this->data["data"] = Producto::all();
        if($request->has("lista") && $request->input("lista") == "archivados"){
            $this->data["data"] = Producto::onlyTrashed()->get();
        }

        return view('admin.'. $this->data["route"] .'.index')->with($this->data);
    }

    public function create(){
        $this->data["categorias"] = Categoria::all();
        return view('admin.'. $this->data["route"] .'.create')->with($this->data);
    }

    public function edit($id,Request $request){

        $this->data["object"] = Categoria::withTrashed()->where("id",$id)->first();
        $this->data["categorias"] = Categoria::all();

        if($request->has("accion")){
            $this->data["object"]->restore();
            return redirect()->route( $this->data["route"] .".index");
        }

        return view('admin.'. $this->data["route"] .'.create')->with($this->data);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
           "nombre" => "required|max:100",
           "codigo" => "required",
           "categoria" => "required",
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $object = new Producto();
        if($request->has("id")){
            $object = Producto::find($request->input("id"));
        }

        $object->nombre = $request->input("nombre");
        $object->codigo = $request->input("codigo");
        $object->cantidad = $request->input("cantidad");
        $object->precio = $request->input("precio");
        $object->alerta = $request->input("alerta");

        if($request->has("categoria")){
            $object->categoria_id = $request->input("categoria");
        }

        if($request->has("etiquetas")){
            $object->etiquetas = $request->input("etiquetas");
        }

        if($request->has("descripcion")){
            $object->descripcion = $request->input("descripcion");
        }

        if($request->hasFile("imagen")){
            $object->imagen = $this->uploadImage("foto-producto-". date("dmYHis") , $request->file("imagen"),"/productos/fotos");
        }

        if($object->save()){
            return redirect()->route( $this->data["route"] .".index");
        }
    }

    private function uploadImage($nombre, $file, $path_save){
        $ruta = "../storage/app". $path_save;
        $extension = $file->getClientOriginalExtension();

        Image::make($file)->resize(150,150)->save($ruta."/". $nombre ."-thumb.". $extension);
        Image::make($file)->resize(400,400)->save($ruta."/". $nombre ."-medium.". $extension);
        Image::make($file)->save($ruta."/". $nombre ."-full.". $extension);

        $fotos = array(
            "thumb" => $path_save ."/". $nombre ."-thumb.". $extension,
            "medium" => $path_save ."/". $nombre ."-medium.". $extension,
            "full" => $path_save ."/". $nombre ."-full.". $extension,
        );

        return json_encode($fotos);
    }
}

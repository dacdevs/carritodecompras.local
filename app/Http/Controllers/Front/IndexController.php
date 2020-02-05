<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;

class IndexController extends Controller
{
    public function getIndex(){
        $data["productos"] = Producto::all();
        return view('front.principal.index')->with($data);
    }
}

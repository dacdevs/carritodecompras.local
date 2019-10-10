<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("imagenes/{carpeta}/{carpeta2}/{archivo}", function($carpeta1,$carpeta2,$archivo){
    $path = storage_path("app/".$carpeta1."/".$carpeta2."/".$archivo);
    return response()->file($path);
});

Route::group(['domain' => 'carritodecompras.local'], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});

Route::group(['domain' => 'admin.carritodecompras.local'], function () {

    Route::get('/', function () {
        //return view('admin.auth.login');
        return redirect()->to("/dashboard");
    });

    //Paginas del admin
    Route::get('/dashboard',"AdminPagesController@getDashboard");
    Route::resource("productos","ProductoController");
    Route::resource("categorias","CategoriaController");

});

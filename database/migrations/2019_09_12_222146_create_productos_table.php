<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->string("codigo");
            $table->text("descripcion");
            $table->double('precio', 8, 2);
            $table->text("imagen");
            $table->string("etiquetas");
            $table->integer("cantidad");
            $table->integer("alerta");
            $table->unsignedBigInteger("categoria_id");
            $table->foreign("categoria_id")->references("id")->on("categorias");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

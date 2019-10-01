<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("venta_id");
            $table->foreign("venta_id")->references("id")->on("ventas");
            $table->unsignedBigInteger("producto_id");
            $table->foreign("producto_id")->references("id")->on("productos");
            $table->integer("cantidad");
            $table->double("descuento",8,2);
            $table->double("total",8,2);
            $table->tinyInteger("estado")->default(1);
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
        Schema::dropIfExists('venta_detalles');
    }
}

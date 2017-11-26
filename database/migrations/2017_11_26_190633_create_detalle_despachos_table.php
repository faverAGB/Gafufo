<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_despachos', function (Blueprint $table) {
            $table->integer('codigo_producto');
            $table->integer('codigo_despacho');
            $table->integer('cantidad_producto');
            $table->integer('costo_total');
            $table->foreign('codigo_producto')->references('codigo_producto')->on('productos');
            $table->foreign('codigo_despacho')->references('codigo_despacho')->on('despachos');
            $table->primary(['codigo_producto', 'cantidad_producto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_despachos');
    }
}

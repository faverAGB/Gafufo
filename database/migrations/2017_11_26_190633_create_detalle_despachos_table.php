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
            $table->integer('producto_id')->unsigned();
            $table->integer('despacho_id')->unsigned();
            $table->integer('cantidad_producto');
            $table->integer('costo_total');


            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('despacho_id')->references('id')->on('despachos');
            
            $table->primary(['producto_id', 'despacho_id']);
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

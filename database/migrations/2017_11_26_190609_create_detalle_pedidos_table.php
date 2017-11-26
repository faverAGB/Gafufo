<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->integer('codigo_producto');
            $table->integer('codigo_pedido');
            $table->integer('cantidad_producto');
            $table->integer('costo_total');
            $table->foreign('codigo_producto')->references('codigo_producto')->on('productos');
            $table->foreign('codigo_pedido')->references('codigo_pedido')->on('pedidos');
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
        Schema::dropIfExists('detalle_pedidos');
    }
}

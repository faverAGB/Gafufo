<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_pedido')->unique();
            $table->integer('cliente_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();
            $table->date('fecha_elaboracion');
            $table->date('fecha_entrega');
            $table->integer('ciudad_id')->unsigned();
            $table->integer('total');

            
            $table->foreign('ciudad_id')->references('id')->on('ciudads');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
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
        Schema::dropIfExists('pedidos');
    }
}

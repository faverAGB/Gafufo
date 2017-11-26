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
            $table->integer('codigo_pedido')->primary();
            $table->integer('codigo_cliente');
            $table->integer('codigo_proveedor');
            $table->date('fecha_elaboracion');
            $table->date('fecha_entrega');
            $table->integer('codigo_ciudad');
            $table->foreign('codigo_ciudad')->references('codigo_postal')->on('ciudads');
            $table->foreign('codigo_cliente')->references('nit')->on('clientes');
            $table->foreign('codigo_proveedor')->references('nit')->on('proveedors');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
            $table->integer('codigo_despacho')->primary();
            $table->integer('codigo_proveedor');
            $table->date('fecha_elaboracion');
            $table->date('fecha_entrega');
            $table->integer('codigo_ciudad');
            $table->foreign('codigo_ciudad')->references('codigo_postal')->on('ciudads');
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
        Schema::dropIfExists('despachos');
    }
}

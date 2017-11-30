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
            $table->increments('id');
            $table->integer('codigo_despacho')->unique();
            $table->integer('proveedor_id')->unsigned();
            $table->date('fecha_elaboracion');
            $table->date('fecha_entrega');
            $table->integer('ciudad_id')->unsigned();

            
            $table->foreign('ciudad_id')->references('id')->on('ciudads');
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
        Schema::dropIfExists('despachos');
    }
}

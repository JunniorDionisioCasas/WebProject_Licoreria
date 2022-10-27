<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_descuentos', function (Blueprint $table) {
            $table->id('id_pedido_descuentos');
            $table->foreignId('id_pedido')->index();
            $table->foreignId('id_descuento')->index();
            $table->integer('pds_cantidad_desc');
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
        Schema::dropIfExists('pedidos_descuentos');
    }
};

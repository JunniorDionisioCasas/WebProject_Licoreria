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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->foreignId('id_tipo_pedido')->index();
            $table->foreignId('id_user')->index();
            $table->foreignId('id_empleado')->index()->nullable();
            $table->foreignId('id_comprobante')->index();
            $table->string('pdd_direccion', 100)->nullable();
            $table->double('pdd_total', 8, 2);
            $table->dateTime('pdd_fecha_entrega')->nullable();
            $table->dateTime('pdd_fecha_recepcion')->nullable();
            $table->text('pdd_descripcion')->nullable();
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
};

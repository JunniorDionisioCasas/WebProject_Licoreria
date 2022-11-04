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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->foreignId('id_categoria')->index();
            $table->foreignId('id_marca')->index();
            $table->string('prd_nombre', 100);
            $table->integer('prd_stock')->default(0);
            $table->double('prd_precio', 6, 2);
            $table->date('prd_fecha_vencimiento')->nullable();
            $table->string('prd_presentacion', 50);
            $table->text('prd_descripcion')->nullable();
            $table->string('prd_imagen_path')->nullable();
            $table->integer('prd_contador_vistas')->default(0);
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
        Schema::dropIfExists('productos');
    }
};

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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->foreignId('id_tipo_empleado')->index();
            $table->string('emp_nombres', 50);
            $table->string('emp_apellidos', 50);
            $table->string('emp_email')->unique();
            $table->string('emp_password');
            $table->string('emp_imagen_path')->nullable();
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
        Schema::dropIfExists('empleados');
    }
};

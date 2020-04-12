<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLibroPrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id','fk_libroprestamo_usuario')->references('id')->on('usuario')->onCreate('restrict')->onUpdate('restrict');

            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id','fk_libroprestamo_libro')->references('id')->on('libro')->onCreate('restrict')->onUpdate('restrict');

            $table->date('frecha_prestamo');
            $table->string('prestado_a');
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
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
        Schema::dropIfExists('libro_prestamo');
    }
}

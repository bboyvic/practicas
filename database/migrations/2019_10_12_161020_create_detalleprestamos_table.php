<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleprestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleprestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prestamo_id');
            $table->unsignedBigInteger('libro_id');
            $table->foreign('prestamo_id')->references('id')->on('prestamos');  
            $table->foreign('libro_id')->references('id')->on('libros');
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
        Schema::dropIfExists('detalleprestamos');
    }
}

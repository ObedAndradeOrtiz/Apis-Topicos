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
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id')->nullable(true);;
            $table->string('nombre')->nullable(true);
            $table->string('ubicacion')->nullable(true);;
            $table->string('direccion')->nullable(true);;
            $table->integer('telefono')->nullable(true);;
            $table->string('ciudad')->nullable(true);;
            $table->string('pais')->nullable(true);;
            $table->dateTime('fecha_hora')->nullable(true);
            $table->boolean('estado')->nullable(true);
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
        Schema::dropIfExists('ubicaciones');
    }
};

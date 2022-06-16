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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id')->nullable(true);
            $table->bigInteger('ubicacion_id')->nullable(true);
            $table->string('nombre')->nullable(true);
            $table->integer('capacidad')->nullable(true);
            $table->integer('precio')->nullable(true);
            $table->string('referencia')->nullable(true);
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
        Schema::dropIfExists('areas');
    }
};

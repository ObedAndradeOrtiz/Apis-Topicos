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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUser')->nullable(true);
            $table->string('titulo')->nullable(true);
            $table->string('tipo')->nullable(true);
            $table->string('rest_edad')->nullable(true);
            $table->string('descripcion')->nullable(true);
            $table->string('categoria')->nullable(true);
            $table->integer('cantidad_ubi')->nullable(true);
            $table->string('file')->nullable(true);
            $table->boolean('estado')->nullable(true);
            $table->string('link_video')->nullable(true);
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
        Schema::dropIfExists('eventos');
    }
};

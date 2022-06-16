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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_area')->nullable(true);
            $table->bigInteger('id_user')->nullable(true);
            $table->bigInteger('id_event')->nullable(true);
            $table->string('name_area')->nullable(true);
            $table->string('name_event')->nullable(true);
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
        Schema::dropIfExists('tickets');
    }
};

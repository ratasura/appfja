<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerifericosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perifericos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo')->nullable(false);
            $table->string('nombre')->nullable(false);
            $table->string('responsable')->nullable(false);
            $table->string('marca')->nullable(false);
            $table->string('modelo')->nullable(false);
            $table->string('serie')->nullable(false);
            $table->string('caf')->nullable(false);
            $table->string('subtipo');
            $table->string('conexion');
            $table->string('color');
            $table->unsignedBigInteger('idubicacion');
            $table->foreign('idubicacion')->references('id')->on('ubicacions')->onDelete('cascade');
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
        Schema::dropIfExists('perifericos');
    }
}

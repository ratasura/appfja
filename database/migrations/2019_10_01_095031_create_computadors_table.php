<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo')->nullable(false);
            $table->string('nombre')->nullable(false);
            $table->string('responsable')->nullable(false);
            $table->integer('ram')->nullable(false);
            $table->string('marca')->nullable(false);
            $table->string('modelo')->nullable(false);
            $table->string('serie')->nullable(false);
            $table->string('caf')->nullable(false);
            $table->unsignedBigInteger('idmonitor');
            $table->foreign('idmonitor')->references('id')->on('monitors')->onDelete('cascade');
            $table->unsignedBigInteger('idteclado');
            $table->foreign('idteclado')->references('id')->on('teclados')->onDelete('cascade');
            $table->unsignedBigInteger('idmouse');
            $table->foreign('idmouse')->references('id')->on('mouses')->onDelete('cascade');
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
        Schema::dropIfExists('computadors');
    }
}

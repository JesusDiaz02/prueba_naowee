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
        Schema::create('direccions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('id');
            $table->string('direccion');
            $table->string('ciudad');
            $table->unsignedBigInteger('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes');
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
        Schema::drop('direccions');
    }
};


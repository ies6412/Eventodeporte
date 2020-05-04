<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubdeportivoDeporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubdeportivo_deporte', function (Blueprint $table) {
            $table->id();
            $table->integer('id_clubdeportivo')->unsigned();
            $table->integer('id_deporte')->unsigned();
            $table->timestamps();

            $table->foreign('id_clubdeportivo')->references('id')->on('clubdeportivos')->delete('cascade');
            $table->foreign('id_Deporte')->references('id')->on('Deportes')->delete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubdeportivo_deporte');
    }
}

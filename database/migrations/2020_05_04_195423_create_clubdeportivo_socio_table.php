<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubdeportivoSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubdeportivo_socio', function (Blueprint $table) {
            $table->id();
            $table->integer('id_clubdeportivo')->unsigned();
            $table->integer('id_socio')->unsigned();
            $table->integer('id_autoridad')->nullable();
            $table->timestamps();

            $table->foreign('id_socio')->references('id')->on('socios')->delete('cascade');
            $table->foreign('id_clubdeportivo')->references('id')->on('clubdeportivos')->delete('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubdeportivo_socio');
    }
}

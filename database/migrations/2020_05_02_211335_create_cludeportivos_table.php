<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCludeportivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tipoentidad',function(Blueprint $table){
          $table->id();
          $table->string('nombre')->unique();
          $table->timestamps();

        });  
        Schema::create('clubdeportivos', function (Blueprint $table) {
            $table->id();
            $table->integer('tipoentidad');
            $table->string('nombre')->unique();
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('tipoentidad')->references('id')->on('tipoentidad')->onDelete('cascade');



        }); 
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoentidad');
        Schema::dropIfExists('clubdeportivos');
        
    }
}

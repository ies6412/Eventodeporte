<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersmisoRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persmiso_role', function (Blueprint $table) {
            $table->id();
            $table->integer('id_permiso')->unsigned();
            $table->integer('id_rol')->unsigned();
            $table->timestamps();
             $table->foreign('id_permiso')->references('id')->on('permisos')->Ondelete('cascade');
             $table->foreign('id_rol')->references('id')->on('roles')->Ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persmiso_role');
    }
}

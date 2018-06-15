<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('descripcion', 200);
            $table->unsignedInteger('user_id');
            $table->timestamps();//Cread dos columnas fecha de creacion y fecha de actualizacion
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comentarios');
    }
}

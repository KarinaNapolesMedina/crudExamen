<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_personas', function (Blueprint $table) {
            $table->id();

            $table->string("Apellido_paterno");
            $table->string("Apellido_materno");
            $table->string("Nombre");
            $table->string("Fecha_de_nacimiento");
            $table->string("Sexo");
            
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
        Schema::dropIfExists('lista_personas');
    }
}

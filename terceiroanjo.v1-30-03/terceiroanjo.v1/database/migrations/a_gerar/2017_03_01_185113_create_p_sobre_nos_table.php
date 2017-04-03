<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePSobreNosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_sobre_nos', function (Blueprint $table) {
            $table->increments('id');


            $table->timestamps();

            /*$table->string('titulo');
            $table->string('descricao');
            $table->text('texto');
            $table->string('imagem')->nullable();
            $table->text('mapa')->nullable();
            $table->string('email')->nullable();
            $table->string('tipo');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_sobre_nos');
    }
}

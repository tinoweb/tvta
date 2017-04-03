<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_subcategoria')->unsigned();
            $table->integer('id_palestrante')->unsigned();
            $table->integer('id_video')->unsigned();
            $table->string('nome');
            $table->string('imagem');
            $table->text('descricao');
            $table->timestamps();
        });

        Schema::table('series', function (Blueprint $table) {
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });

        Schema::table('series', function (Blueprint $table) {
            $table->foreign('id_subcategoria')->references('id')->on('sub_categorias');
        });

        Schema::table('series', function (Blueprint $table) {
            $table->foreign('id_palestrante')->references('id')->on('palestrantes');
        });

        Schema::table('series', function (Blueprint $table) {
            $table->foreign('id_video')->references('id')->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}

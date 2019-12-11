<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioCarro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_carro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_usuariocarro_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('carro_id');
            $table->foreign('carro_id', 'fk_usuariocarro_carro')->references('id')->on('carro')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('usuario_carro');
    }
}

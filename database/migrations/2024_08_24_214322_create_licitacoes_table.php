<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicitacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacoes', function (Blueprint $table) {
            $table->id();
            $table->date('data_resultado');
            $table->date('data_abertura');
            $table->string('orgao_superior');
            $table->string('orgao_vinculado');
            $table->string('unidade_gestora');
            $table->string('situacao');
            $table->string('modalidade');
            $table->string('instrumento_legal');
            $table->string('numero_licitacao');
            $table->text('objeto');
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
        Schema::dropIfExists('licitacoes');
    }
}
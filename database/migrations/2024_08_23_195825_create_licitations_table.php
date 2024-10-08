<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitations', function (Blueprint $table) {
            $table->id();
            $table->date('data_resultado_compra');
            $table->date('data_abertura');
            $table->string('orgao_superior_licitante');
            $table->string('orgao_vinculada_licitante');
            $table->string('unidade_gestora');
            $table->string('situacao');
            $table->string('modalidade_licitacao');
            $table->string('instrumento_legal_contratacao');
            $table->string('numero_licitacao');
            $table->text('objeto_licitacao');
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
        Schema::dropIfExists('licitations');
    }
}

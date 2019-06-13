<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cnpj');
            $table->string('razaoSocial');
            $table->string('nomeFantasia');
            $table->string('indicadorInscEst');
            $table->string('inscricaoEst');
            $table->string('inscricaoMunic');
            $table->string('situacaoCNPJ');
            $table->string('recolhimento');
            $table->string('ativo');
            $table->string('mensagem');

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
        Schema::dropIfExists('fornecedores');
    }
}

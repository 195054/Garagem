<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->id();
            $table->date('data_venda');
            $table->float('valor_venda');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_funcionario');
            $table->unsignedBigInteger('id_veiculo');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_funcionario')->references('id')->on('funcionario');
            $table->foreign('id_veiculo')->references('id')->on('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venda');
    }
};

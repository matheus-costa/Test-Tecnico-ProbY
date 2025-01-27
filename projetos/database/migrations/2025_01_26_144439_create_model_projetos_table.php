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
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->date('data');
            $table->string('status');
            $table->timestamps();

        });
    }
/**Nome do projeto (obrigatório, texto, até 255 caracteres).
Descrição do projeto (opcional, texto longo).
Data de início (obrigatório, formato YYYY-MM-DD).
Status (obrigatório, valores possíveis: "Pendente", "Em Andamento", "Concluído").
 */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};

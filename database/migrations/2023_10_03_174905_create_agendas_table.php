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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->integer('profissional_Id', 120)->nullable(false);
            $table->integer('cliente_Id', 100)->nullable(true);
            $table->dateTime('dataHora', 100)->nullable(false);
            $table->integer('servico_Id', 100)->nullable(false);
            $table->string('pagamento', 100)->nullable(false);
            $table->integer('valor', 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};

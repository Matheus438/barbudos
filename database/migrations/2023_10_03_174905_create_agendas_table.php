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
            $table->integer('profissional_Id')->nullable(false);
            $table->integer('cliente_Id')->nullable(true);
            $table->dateTime('dataHora' )->nullable(false);
            $table->integer('servico_Id')->nullable(true);
            $table->string('pagamento', 20)->nullable(true);
            $table->integer('valor')->nullable(true);
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

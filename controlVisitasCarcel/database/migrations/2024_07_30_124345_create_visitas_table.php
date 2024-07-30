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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prisonero_id')->constrained('pricioneros'); // ID del prisionero (relación con tabla prisoneros)
            $table->foreignId('visitantes_id')->constrained('visitantes'); // ID del visitante (relación con tabla visitantes)
            $table->dateTime('InicioVisita'); // Fecha y hora de inicio de la visita
            $table->dateTime('finVisita'); // Fecha y hora de fin de la visita
            $table->foreignId('guardia_id')->constrained('guardias'); // ID del guardia que aprobó la visita
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};

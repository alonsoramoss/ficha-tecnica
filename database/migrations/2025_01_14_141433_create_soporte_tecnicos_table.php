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
        Schema::create('soporte_tecnico', function (Blueprint $table) {
            $table->id();
            $table->string('nomFicha');
            $table->string('unidOrganica');
            $table->date('fecha');
            $table->string('encargado');
            $table->string('cargo');
            $table->integer('dni');
            $table->string('modalidadLab');
            $table->string('nomTecnico');
            $table->json('hardware')->nullable();
            $table->json('hardware_text')->nullable();
            $table->json('sistemas')->nullable();
            $table->json('sistemas_text')->nullable();
            $table->json('software')->nullable();
            $table->json('software_text')->nullable();
            $table->json('redes')->nullable();
            $table->json('redes_text')->nullable();
            $table->text('observacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soporte_tecnico');
    }
};

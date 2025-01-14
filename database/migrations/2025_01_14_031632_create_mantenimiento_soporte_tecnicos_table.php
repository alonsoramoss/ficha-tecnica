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
        Schema::create('mantenimiento_soporte_tecnico', function (Blueprint $table) {
            $table->id();
            $table->string('unidOrganica');
            $table->date('fecha');
            $table->string('encargado');
            $table->string('cargo');
            $table->integer('dni');
            $table->string('modalidadLab');
            $table->string('nomTecnico');
            $table->string('hardware')->nullable();
            $table->string('sistemas')->nullable();
            $table->string('software')->nullable();
            $table->string('redes')->nullable();
            $table->text('observacion');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimiento_soporte_tecnicos');
    }
};

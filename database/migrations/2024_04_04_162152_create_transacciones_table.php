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
        Schema::create('transaccions', function (Blueprint $table) {
            $table->id();
            $table->string('codigo'); 
            $table->string('nombre'); 
            $table->string('saldoanterior'); // Campo para el saldo anterior (decimal con 10 dígitos en total y 2 decimales)
            $table->string('debito'); // Campo para el débito (decimal con 10 dígitos en total y 2 decimales)
            $table->string('credito'); // Campo para el crédito (decimal con 10 dígitos en total y 2 decimales)
            $table->string('saldoactual'); // Campo para el saldo actual (decimal con 10 dígitos en total y 2 decimales)
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaccions');
    }
};

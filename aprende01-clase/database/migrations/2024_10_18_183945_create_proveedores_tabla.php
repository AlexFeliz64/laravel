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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nif', 15)->unique();
            $table->string('razon_social', 200)->nullable()->unique();
            $table->string('nombre', 50)->nullable()->nullable();
            $table->string('apellido1', 50)->nullable();
            $table->string('apellido2', 50)->nullable();
            $table->boolean('autonomo');
            $table->string('direccion', 200);
            $table->string('telefono', 50);
            $table->text('observaciones')->nullable();
            $table->timestamps();
            //$table->unique(['nif', 'nombre', 'apellido1', 'apellido2']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};

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
        Schema::create('proveedores_tabla', function (Blueprint $table) {
            $table->id();
            $table->string('nif', 15)->unique();
            $table->string('nombre', 200);
            $table->string('pais', 50)->nullable();
            $table->text('productos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores_tabla');
    }
};

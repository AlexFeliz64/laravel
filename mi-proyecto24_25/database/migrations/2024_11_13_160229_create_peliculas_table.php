'<?php

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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('portada')->nullable();
            $table->string('titulo', 75)->unique();
            $table->foreignId('genero_id')->constrained('generos')->onDelete('cascade');
            $table->date('fecha_lanzamiento');
            $table->integer('duracion');
            $table->string('director')->nullable();
            $table->text('sinopsis')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};

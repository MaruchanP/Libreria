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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->foreignId('autor_id');
            $table->foreignId('editorial_id');
            $table->year('anio_publicado');
            $table->integer('num_de_pag');
            $table->decimal('precio', 8, 2);
            $table->boolean('disponibilidad');
            $table->foreignId('genero_id');
            $table->timestamps();
            
            // Foreign keys constraints
            // $table->foreign('autor_id')->references('id')->on('autors');
            // $table->foreign('editorial_id')->references('id')->on('editoriales');
            // $table->foreign('genero_id')->references('id')->on('genero');
            
            // Timestamps 
            // (created_at & updated_at columns)
            // are already included by default with 
            // Laravel's Eloquent ORM.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};


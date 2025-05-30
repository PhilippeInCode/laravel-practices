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
        Schema::dropIfExists('posts');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('posts', function(Blueprint $table){
            $table->id();
            $table->string('titulo', 255);
            $table->text('contenido');
            $table->timestamp('fecha_publicacion')->nullable();
            $table->timestamps();
        });
    }
};

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
        Schema::create('genre_videogame', function (Blueprint $table) {
            $table->unsignedBigInteger('videogame_id');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            $table->foreign('videogame_id')->references('id')->on('videogames')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');

            $table->primary(['videogame_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_videogame');
    }
};

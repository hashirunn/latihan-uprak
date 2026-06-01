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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('author', 50);
            $table->year('year');
            $table->string('publisher', 50);
            $table->string('city', 50);
            // $table->foreignId('bookshelf_id');
            $table->unsignedBigInteger('bookshelf_id');
            $table->timestamps();

            $table->foreign('bookshelf_id')->references('id')->on('bookshelves');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

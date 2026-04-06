<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // int(20)
            $table->string('title', 255);
            $table->string('author', 255);
            $table->year('year');
            $table->string('publisher', 255);
            $table->string('city', 255);
            $table->string('cover', 255)->default('default.jpg');
            
            // Foreign Key ke tabel bookshelfs
            $table->foreignId('bookshelf_id')->constrained('bookshelfs')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
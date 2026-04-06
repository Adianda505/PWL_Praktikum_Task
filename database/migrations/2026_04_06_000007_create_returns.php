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
    Schema::create('returns', function (Blueprint $table) {
    $table->id(); // int(20)
    $table->foreignId('loan_detail_id')->constrained('loan_detail')->onDelete('cascade');
    $table->boolean('charge'); // apakah ada denda
    $table->integer('amount'); // jumlah denda
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::create('returns', function (Blueprint $table) {
    $table->id(); // int(20)
    $table->foreignId('loan_detail_id')->constrained('loan_detail')->onDelete('cascade');
    $table->boolean('charge'); // apakah ada denda
    $table->integer('amount'); // jumlah denda
    $table->timestamps();
});
    }
};

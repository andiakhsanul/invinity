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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // 1 user 1 payment
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('metode_pembayaran');
            $table->string('screenshot_proof');
            $table->boolean('status')->default(false); // Status pembayaran
            $table->string('alasan')->nullable(); // Alasan jika pembayaran ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};

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
        Schema::create('paper', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('nationality');
            $table->string('country_of_residence');
            $table->string('institution');
            $table->string('profession');
            $table->unsignedBigInteger('phone_number');
            $table->string('email');
            $table->string('student_number');
            $table->string('screenshot_proof');
            $table->string('payment_methods');
            $table->string('payment_proof');
            $table->string('document'); // Upload paper document
            $table->string('poster');      // Upload poster image
            $table->unsignedBigInteger('user_id')->unique(); // Foreign key for user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paper');
    }
};
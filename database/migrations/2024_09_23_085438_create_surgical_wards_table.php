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
        Schema::create('surgical_wards', function (Blueprint $table) {
            $table->id();  // Auto-incrementing WardID
            $table->string('name');
            $table->string('location')->nullable();
            $table->integer('capacity');
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->timestamps();

            // Foreign key
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surgical_wards');
    }
};

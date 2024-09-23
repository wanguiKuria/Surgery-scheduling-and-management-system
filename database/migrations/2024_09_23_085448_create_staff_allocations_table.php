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
        Schema::create('staff_allocations', function (Blueprint $table) {
            $table->id();  // Auto-incrementing AllocationID
            $table->unsignedBigInteger('surgery_id');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('surgery_id')->references('id')->on('surgeries')->onDelete('cascade');
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_allocations');
    }
};

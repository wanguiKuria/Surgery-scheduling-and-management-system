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
        Schema::create('surgeries', function (Blueprint $table) {
            $table->id();  // Auto-incrementing SurgeryID
            $table->unsignedBigInteger('surgeon_id');
            $table->unsignedBigInteger('patient_id');
            $table->date('date');
            $table->time('time');
            $table->string('status');
            $table->unsignedBigInteger('operating_room_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('operating_room_id')->references('id')->on('operating_rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surgeries');
    }
};

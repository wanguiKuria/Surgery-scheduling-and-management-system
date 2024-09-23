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
        Schema::create('operating_rooms', function (Blueprint $table) {
            $table->id();  // Auto-incrementing OperatingRoomID
            $table->string('name');
            $table->string('location')->nullable();
            $table->text('equipment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operating_rooms');
    }
};

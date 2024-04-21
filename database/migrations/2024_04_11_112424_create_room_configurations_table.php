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
        Schema::create('room_configurations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')
                ->constrained('rooms')
                ->cascadeOnDelete();
            $table->foreignId('room_type_id')
                ->constrained('room_types')
                ->cascadeOnDelete();
            $table->foreignId('bed_id')
                ->constrained('bed_types')
                ->cascadeOnDelete();
            $table->enum('meal_type', ['ep', 'ap', 'cp', 'map']);
            $table->enum('ac', ['ac', 'no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_configurations');
    }
};

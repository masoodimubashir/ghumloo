<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')
                ->constrained('vendors')
                ->cascadeOnDelete();
            $table->string('room_number')->unique();
            $table->string('room_name');
            $table->decimal('area');
            $table->unsignedInteger('max_persons')->default(0);
            $table->unsignedInteger('max_children')->default(0);
            $table->unsignedInteger('price_per_night')->default(0);
            $table->unsignedInteger('cancellation_in_days');
            $table->string('services');
            $table->text('overview');
            $table->string('images')->nullable();
            $table->boolean('free_cancellation')->default(false);
            $table->boolean('lunch')->default(false);
            $table->boolean('dinner')->default(false);
            $table->boolean('breakfast')->default(false);
            $table->boolean('room_availability')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

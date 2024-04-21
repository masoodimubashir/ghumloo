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
        Schema::create('hotel_package', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')
                ->constrained('hotels')
                ->cascadeOnDelete();
            $table->foreignId('package_id')
                ->constrained('packages')
                ->cascadeOnDelete();
            $table->unsignedInteger('price_per_stay');
            $table->unsignedInteger('stay_period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_package');
    }
};

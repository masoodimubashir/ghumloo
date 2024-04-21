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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name')->unique();
            $table->unsignedInteger('package_price');
            $table->string('packageid')->unique();
            $table->unsignedInteger('discount_price')->nullable();
            $table->unsignedInteger('gst')->default(0);
            $table->unsignedInteger('total_stay_period');
            $table->boolean('status')->default(false);
            $table->boolean('popular')->default(false);
            $table->boolean('validity')->default(false);
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('slug');
            $table->dateTime('booking_date')->nullable();
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};

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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_type_id')
                ->constrained('property_types')
                ->onDelete('cascade');
            $table->foreignId('vendor_id')
                ->constrained('vendors')
                ->onDelete('cascade');
            $table->foreignId('city_id')
                ->constrained('cities')
                ->cascadeOnDelete();
            $table->string('hotel_name');
            $table->string('email')->unique();
            $table->string('phone_one');
            $table->string('phone_two')->nullable();
            $table->date('check_in');
            $table->date('check_out');
            $table->text('description');
            $table->string('address');
            $table->string('search_area');
            $table->decimal('longitude', 10, 7)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->unsignedInteger('star_rating')->default(0);
            $table->boolean('active_by_admin')->default(false);
            $table->boolean('popular')->default(false);
            $table->boolean('allowed_pets')->default(false);
            $table->boolean('status')->default(false);
            $table->json('images')->nullable();
            $table->tinyText('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};

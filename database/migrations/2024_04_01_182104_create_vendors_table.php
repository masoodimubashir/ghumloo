<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name');
            $table->string('gst_number');
            $table->string('hotel_name');
            $table->string('manager_name');
            $table->string('image')->nullable();
            $table->string('address');
            $table->string('email')->unique();
            $table->string('contact_person_name');
            $table->bigInteger('contact_person_number');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('number_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('show_password')->nullable();
            $table->enum('status', ['0', '1', '2']);
            $table->bigInteger('commission')->default('0');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};

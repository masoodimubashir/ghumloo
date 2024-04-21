<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('coupon_codes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->enum('type', ['Percentage', 'Amount']);
            $table->integer('discount');
            $table->timestamp('valid_from');
            $table->timestamp('valid_to');
            $table->enum('status', ['0', '1']);
            $table->enum('used_coupon', ['0', '1']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupon_codes');
    }
};

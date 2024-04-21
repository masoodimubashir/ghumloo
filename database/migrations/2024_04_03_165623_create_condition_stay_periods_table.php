<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('condition_stay_periods', function (Blueprint $table) {
            $table->id();
            $table->integer('num_of_days')->unsigned()->default(0);
            $table->integer('discount')->unsigned()->default(0);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('condition_stay_periods');
    }
};

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
        Schema::create('user_details', function (Blueprint $table) {
            $table->uuid('user_detail_id')->primary();
            $table->foreignUuid('user_id')->references('user_id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('gender', [0, 1])->default(0);
            $table->string('phone_number', 15);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};

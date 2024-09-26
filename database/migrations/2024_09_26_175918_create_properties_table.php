<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('checkin_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedInteger('guests');
            $table->unsignedInteger('beds');
            $table->unsignedInteger('bedrooms');
            $table->unsignedInteger('bathrooms');
            $table->text('description')->nullable();
            $table->string('location');
            $table->json('images')->nullable();
            $table->json('house_rules')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

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
        Schema::create('other_sessions_info', function (Blueprint $table) {

            $table->id();
            $table->string('ip_address')->unique();
            $table->timestamp('request_timestamp');
            $table->string('timezone')->nullable();
            $table->string('city')->nullable();
            $table->string('asn')->nullable();
            $table->string('name')->nullable();
            $table->string('latitude_longitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_sessions_info');
    }
};

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
        Schema::create('farmer_service_booking', function (Blueprint $table) {
            $table->id();
            $table->string('uname', 60);
            $table->string('provider', 60);
            $table->string('sid', 60);
            $table->string('duration', 60);
            $table->string('time_type', 60);
            $table->string('req_date', 60);
            $table->string('status', 60);
            $table->string('amount', 60);
            $table->string('rdate', 60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_service_booking');
    }
};

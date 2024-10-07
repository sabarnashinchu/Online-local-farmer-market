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
        Schema::create('ar_booking', function (Blueprint $table) {
            $table->id();
            $table->string('uname', 60);
            $table->string('provider', 60);
            $table->string('vid', 60);
            $table->string('duration', 60);
            $table->string('time_type', 60);
            $table->string('req_date', 60);
            $table->string('status', 60);
            $table->string('amount', 60);
            $table->string('pay_st', 60);
            $table->timestamps();
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_booking');
    }
};

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
        Schema::create('ar_live_stock_booking', function (Blueprint $table) {
            $table->id();
            $table->string('provider', 60);
            $table->string('animal', 60);
            $table->string('aweight', 60);
            $table->string('location', 60);
            $table->string('details', 60);
            $table->string('cost', 60);
            $table->string('file', 60);
            $table->string('latitude', 60);
            $table->string('longitude', 60);
            $table->string('rdate', 60);
            $table->timestamps();
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_live_stock_booking');
    }
};

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
        Schema::create('ar_product_booking', function (Blueprint $table) {
            $table->id();
            $table->string('uname', 60);
            $table->string('farmer', 60);
            $table->string('fid', 60);
            $table->string('qty', 60);
            $table->string('req_date', 60);
            $table->string('status', 60);
            $table->string('amount', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_product_booking');
    }
};

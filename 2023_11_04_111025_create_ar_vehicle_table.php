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
        Schema::create('ar_vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('uname', 100);
            $table->string('vehicle', 100);
            $table->string('vno', 100);
            $table->string('details', 100);
            $table->string('cost1', 100);
            $table->string('cost2', 100);
            $table->string('photo', 100);
            $table->string('create_date', 100);
            $table->string('status', 100);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_vehicle');
    }
};

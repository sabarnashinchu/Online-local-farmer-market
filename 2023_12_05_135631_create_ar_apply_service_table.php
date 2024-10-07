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
        Schema::create('ar_apply_service', function (Blueprint $table) {
            $table->id();
            $table->string('serviceid', 60);
            $table->string('service', 60);
            $table->string('provider', 60);
            $table->string('address', 60);
            $table->string('city', 60);
            $table->string('mobile', 60);
            $table->string('status', 60);
            $table->string('rdate', 60);

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_apply_service');
    }
};

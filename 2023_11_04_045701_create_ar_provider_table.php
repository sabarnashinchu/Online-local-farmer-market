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
        Schema::create('ar_provider', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->string('address', 100);
            $table->string('district', 40);
            $table->string('mobile', 40);
            $table->string('email', 40);
            $table->string('uname', 40);
            $table->string('pass', 40);
            $table->string('create_date', 40);
            $table->string('status', 40);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_provider');
    }
};

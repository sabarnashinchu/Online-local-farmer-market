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
        Schema::create('ar_user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('address', 60);
            $table->string('district', 40);
            $table->string('mobile', 10);
            $table->string('email', 60);
            $table->string('uname', 15)->unique();
            $table->string('pass', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_user');
    }
};

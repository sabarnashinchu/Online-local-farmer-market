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
        Schema::create('ar_product', function (Blueprint $table) {
            $table->id();
            $table->string('product', 40);
            $table->string('farmer', 40);
            $table->string('qty', 40);
            $table->string('price', 40);
            $table->string('pfile', 40);
            $table->string('rdate', 40);
            $table->string('status', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_product');
    }
};

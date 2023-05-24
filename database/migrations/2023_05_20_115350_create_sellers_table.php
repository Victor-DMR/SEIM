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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('cc', 15);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->string('namestore', 100);
            $table->string('ubicacion', 100);
            $table->string('category', 100);
            $table->string('productservice', 100);
            $table->string('optiontrade', 50);
            $table->string('numberrecord', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};

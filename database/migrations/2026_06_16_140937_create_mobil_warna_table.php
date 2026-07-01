<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mobil_warna', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('mobil_id');

            $table->unsignedBigInteger('warna_id');

            $table->timestamps();

            $table->foreign('mobil_id')
                  ->references('id')
                  ->on('mobils')
                  ->onDelete('cascade');

            $table->foreign('warna_id')
                  ->references('id')
                  ->on('warna')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mobil_warna');
    }
};
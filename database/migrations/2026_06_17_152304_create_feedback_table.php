<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {

            $table->id();

            $table->enum('q1', ['Ya', 'Tidak']);
            $table->enum('q2', ['Ya', 'Tidak']);
            $table->enum('q3', ['Ya', 'Tidak']);
            $table->enum('q4', ['Ya', 'Tidak']);
            $table->enum('q5', ['Ya', 'Tidak']);
            $table->enum('q6', ['Ya', 'Tidak']);
            $table->enum('q7', ['Ya', 'Tidak']);
            $table->enum('q8', ['Ya', 'Tidak']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
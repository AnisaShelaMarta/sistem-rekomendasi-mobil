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
    Schema::create('mobils', function (Blueprint $table) {

        $table->id();

        $table->string('nama_mobil');
        $table->string('tipe_mobil');

        $table->bigInteger('harga');

        $table->string('jenis');
        $table->string('warna');

        $table->string('bahan_bakar');
        $table->string('transmisi');

        $table->integer('kapasitas_penumpang');
        $table->integer('kapasitas_mesin');

        $table->string('gambar')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};

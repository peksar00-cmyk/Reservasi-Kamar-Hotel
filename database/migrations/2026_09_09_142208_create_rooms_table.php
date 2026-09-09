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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); // ID unik kamar
            $table->string('name'); // Nama kamar (Standard, Deluxe, Suite)
            $table->text('description'); // Deskripsi kamar
            $table->integer('price'); // Harga per malam
            $table->integer('capacity'); // Kapasitas (misal: 2 untuk 2 orang)
            $table->string('image')->nullable(); // Nama file gambar
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

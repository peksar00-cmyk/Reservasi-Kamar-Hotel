<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('destination');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('guests');
            $table->string('room_type')->nullable();
            $table->decimal('total_price', 12, 2)->default(0);
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->timestamps(); // Mencatat created_at (waktu transaksi) dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
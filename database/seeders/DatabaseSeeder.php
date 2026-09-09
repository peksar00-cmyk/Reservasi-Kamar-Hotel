<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Masukkan data 3 kamar ke database
        \App\Models\Room::insert([
            [
                'name' => 'Standard Room',
                'description' => 'A calm, comfortable room for two. Thoughtfully designed with minimalistic touches.',
                'price' => 950000,
                'capacity' => '2',
                'image' => 'standardroom.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Deluxe King',
                'description' => 'Spacious and elegant with city views. Perfect for those who want extra comfort and luxury.',
                'price' => 1250000,
                'capacity' => '2',
                'image' => 'deluxekingroom.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suite',
                'description' => 'Our most premium offering with a separated living area. Experience the ultimate stay.',
                'price' => 1850000,
                'capacity' => '4',
                'image' => 'suiteroom.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

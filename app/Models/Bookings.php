<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings'; // Menghubungkan ke tabel 'bookings'

    protected $fillable = [
        'user_id',
        'destination',
        'check_in',
        'check_out',
        'guests',
        'room_type',
        'total_price',
        'status',
    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
    ];
}
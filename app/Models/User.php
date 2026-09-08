<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Sesuaikan dengan nama tabel di phpMyAdmin ('users' atau 'user')
    protected $table = 'user';

    // Primary Key
    protected $primaryKey = 'id';

    // Kolom yang diizinkan untuk diisi dari form register
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Kolom yang disembunyikan
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
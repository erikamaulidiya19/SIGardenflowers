<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class hias extends Model
{
    protected $table = 'hiass';

    protected $fillable = [
        'namahias',
        'tokohias',
        'hargahias',
        'alamathias',
        'imagehias'
    ];

    protected $primaryKey = 'id_hias';
}

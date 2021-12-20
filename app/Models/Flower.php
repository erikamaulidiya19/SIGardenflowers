<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Flower extends Model
{
    protected $table = 'flowers';

    protected $fillable = [
        'namabunga',
        'tokobunga',
        'alamatbunga',
        'image',
        'harga'
    ];

    protected $primaryKey = 'id_bunga';
}

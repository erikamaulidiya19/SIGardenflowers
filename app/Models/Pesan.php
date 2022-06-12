<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PDO;

class Pesan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'nama',
        'nomor',
        'alamat',
        'jumlah_harga',
        'nama_laptop'
    ];

    protected $primaryKey = 'id_pesan';

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'user_id', 'id');
    // }

    // public function pesan_detail(){
    //     return $this->hasMany('App\Detail', 'barang_id', 'id');
    // }

}




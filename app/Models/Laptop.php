<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Laptop extends Model
{
    protected $table = 'laptop';

    protected $fillable = [
        'namalaptop',
        'tokolaptop',
        'alamatlaptop',
        'image',
        'harga'
    ];

    protected $primaryKey = 'id_laptop';

    public function detail_user(){
        return $this->hasMany('App\Detail', 'barang_id', 'id');
    }
}

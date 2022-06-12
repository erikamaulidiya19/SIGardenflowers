<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Detail extends Model
{
    public function laptop1()
    {
        return $this->belongsTo('App\Laptop','id_laptop', 'id');
    }
public function pesanan(){
    return $this->belongsTo('App\Pesanan', 'user_id','id');
}

}




<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $fillable = ['nama', 'kategori','kapasitas','fasilitas','harga','status', 'user_id'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $fillable = ['nama', 'kategori','kapasitas','harga','status', 'user_id'];
}

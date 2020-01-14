<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $table = 'booking';
   protected $fillable = ['id_admin', 'id_room','id_customer','tgl_mulai','tgl_akhir','tgl_book', 'user_id'];
}

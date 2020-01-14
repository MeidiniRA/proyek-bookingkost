<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $table = 'customer';
   protected $fillable = ['nama', 'jk','status','hp','email','alamat', 'user_id'];
}

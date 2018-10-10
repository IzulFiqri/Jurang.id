<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelPemesanan extends Model
{
  protected $table = 'stock';
  protected $primaryKey = 'idStock';
  protected $fillable = [
  'foto','namaStock','beratStock','jumlahStock', 'harga', 'posthome'
  
  ];
}

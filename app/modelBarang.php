<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelBarang extends Model
{
  protected $table = 'stock';
  protected $primaryKey = 'idStock';
  protected $fillable = [
      'foto','namaStock','beratStock', 'harga', 'posthome'
  ];
  
}

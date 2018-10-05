<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelBarang extends Model
{
  protected $table = 'stockterasi';
  protected $primaryKey = 'idStock';
  protected $fillable = [
      'jumlahStock', 'harga'
  ];
  public $timestamps=false;
}

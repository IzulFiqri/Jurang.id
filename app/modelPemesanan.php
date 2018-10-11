<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelPemesanan extends Model
{
  protected $table = 'pemesanan';
  protected $primaryKey = 'idPemesanan';
  protected $fillable = [
  'namaPemesan','idStock','iduser','jumlahPesanan','noTelponPemesanan','alamatPemesan', 'alamatPengiriman'
  
  ];
  public $timestamps = false;
}

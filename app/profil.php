<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
  protected $table = 'profil';
  protected $primaryKey = 'idprofil';
  protected $fillable = [
      'iduser','nama','alamat', 'nomortelepon', 'pointqu'
  ];
  public $timestamps=false;
}

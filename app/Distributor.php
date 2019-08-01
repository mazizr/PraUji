<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable =  ['nama_distributor','alamat','telepon'];
    public $timestamps = true;
    public function pasok()
    {
        return $this->hasMany('App\Pasok','id_distributor');
    }
}

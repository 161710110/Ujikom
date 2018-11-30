<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = ['nama_merk','foto'];
    public $timestamps = true;

    public function barang()
	{
	    return $this->hasMany('App\Barang', 'merk_id');
	}


}

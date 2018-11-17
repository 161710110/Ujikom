<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merks';
    protected $fillable = ['nama_merk'];
    public $timestamps = true;

    public function barang()
	{
	    return $this->belongsTo('App\Barang', 'merk_id');
	}


}

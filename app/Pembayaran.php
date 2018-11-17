<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $fillable = ['keranjang_id','hp','email','alamat'];
    public $timestamps = true;

    public function keranjang()
	{
	    return $this->belongsTo('App\keranjang', 'keranjang_id');
	}
}

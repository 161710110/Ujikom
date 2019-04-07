<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjangs';
    protected $fillable = ['barang_id','user_id','jumlah'];
    public $timestamps = true;

    public function barang()
	{
	    return $this->belongsTo('App\Barang', 'barang_id');
	}
	public function user()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}
	// public function pembayaran()
	// {
	//     return $this->hasOne('App\Pembayaran', 'kenranjang_id');
	// }

}

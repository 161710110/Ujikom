<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $fillable = ['keranjang_id','nama','nama_lengkap','email','hp','alamat','provinsi','kota','kodepos'];
    public $timestamps = true;

 //    public function keranjang()
	// {
	//     return $this->belongsTo('App\keranjang', 'keranjang_id');
	// }

	public function barang() {
        return $this->belongsTo('App\Barang', 'barang_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}

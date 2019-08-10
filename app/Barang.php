<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['merk_id','kategori_id','nama_barang','harga_barang','deskripsi','stock','slug'];
    public $timestamps = true;

    public function merk()
	{
	    return $this->belongsTo('App\Merk', 'merk_id');
	}

	public function kategori()
	{
	    return $this->belongsTo('App\KategoriBarang', 'kategori_id');
	}
	public function fotobarang()
	{
	    return $this->hasMany('App\FotoBarang', 'barang_id');
	}
	public function pembayaran() {
        return $this->hasMany('App\Pembayaran', 'barang_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = ['merk_id','kategori_id','nama_barang','harga_barang','deskripsi','stock','slug'];
    public $timestamps = true;

    public function merk()
	{
	    return $this->hasMany('App\Merk', 'merk_id');
	}

	public function kategori()
	{
	    return $this->hasMany('App\KategoriBarang', 'kategori_id');
	}
	public function fotobarang()
	{
	    return $this->belongsTo('App\FotoBarang', 'barang_id');
	}
}

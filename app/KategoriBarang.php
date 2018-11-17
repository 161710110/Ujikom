<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $table = 'kategori_barangs';
    protected $fillable = ['nama_kategori','slug'];
    public $timestamps = true;

    public function barang()
	{
	    return $this->belongsTo('App\Barang', 'kategori_id');
	}
}

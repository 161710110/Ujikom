<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
	protected $table = 'kategori_barangs';
    protected $fillable = ['id','nama_kategori','slug'];
    public $timestamps = true;

    public function barang()
	{
	    return $this->hasMany('App\Barang', 'kategori_id');
	}
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
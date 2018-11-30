<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = ['kategori_id','judul','cover','isi','penulis','tanggal','slug'];
    public $timestamps = true;

    public function kategoriartikel()
	{
	    return $this->belongsTo('App\KategoriArtikel', 'kategori_id');
	}
	public function getRouteKeyName()
	{
		return 'slug';
	}
	
}

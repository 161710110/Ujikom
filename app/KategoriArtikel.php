<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table = 'kategori_artikels';
    protected $fillable = ['nama_kategori','slug'];
    public $timestamps = true;

    public function artikel()
	{
	    return $this->belongsTo('App\Artikel', 'kategori_id');
	}
}

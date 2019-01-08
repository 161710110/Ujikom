<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoBarang extends Model
{
	protected $table = 'foto_barangs';
    protected $fillable = ['barang_id','foto'];
    public $timestamps = true;

    public function barang()
	{
	    return $this->belongsTo('App\Barang', 'barang_id');
	}
}

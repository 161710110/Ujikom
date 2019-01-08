<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBarang;
use App\Barang;
use App\KategoriArtikel;
use App\Artikel;
use App\Contact;
use App\Merk;
use App\FotoBarang;
use App\Keranjang;
use App\Pembayaran;

class FrontendController extends Controller
{
     public function index()
    {
        $art = Artikel::all();
        $bar = Barang::all();
        $con = Contact::all();
        $fotbar = FotoBarang::All();
        $katart = KategoriArtikel::all();
        $katbar = KategoriBarang::all();
        $cart = Keranjang::all();
        $merk = Merk::all();
        $pay = Pembayaran::all();
        // dd($fotbar);
        return view('home.shop',compact('art','bar','con','fotbar','katart','katbar','cart','merk','pay'));
    }
}

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
    public function category($slug)
    {
        $katbar = KategoriBarang::all();
        $kategori = KategoriBarang::whereSlug($slug)->first();

        return view('home.katbar', compact('katbar','kategori'))->with('kategori', $kategori);
    }

    public function sortby()
    {
        $sort =$_GET['sort'];
        $finding_tbl = findings::orderBy('id', $sort)->paginate(5);
        $finding_tbl->setPath('home');
        return view('home.shop',compact('finding_tbl','sort') );
    }

    public function listproduct(KategoriBarang $kategoribarang)
    {
        $fotbar = $kategoribarang->Barang()->latest()->paginate(9);
        $katbar = KategoriBarang::all();
        $merk = Merk::all();
        $fotobarang = FotoBarang::all();

        return view('home.shop', compact('barang','katbar','merk','fotbar'));
    }

    public function shop()
    {
        $art = Artikel::all();
        $bar = Barang::all();
        $con = Contact::all();
        $fotbar = FotoBarang::all();
        $katart = KategoriArtikel::all();
        $katbar = KategoriBarang::all();
        $cart = Keranjang::all();
        $merk = Merk::all();
        $pay = Pembayaran::all();
        // dd($bar);
        return view('home.shop',compact('art','bar','con','fotbar','katart','katbar','cart','merk','pay'));
    }

    public function show1($slug)
    {
        $bar = Barang::where('slug', $slug)->first();
        // dd($bar);
        return view('home.show',compact('bar'));
    }

    public function blog()
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
        return view('blog.index',compact('art','bar','con','fotbar','katart','katbar','cart','merk','pay'));
    }

    public function view1($slug)
    {
        $art = Artikel::where('slug', $slug)->first();
        return view('blog.view',compact('art'));
    }

    public function catblog($slug)
    {
        $katart = KategoriArtikel::all();
        $kategori = KategoriArtikel::whereSlug($slug)->first();

        return view('blog.view', compact('katart','kategori'))->with('kategori', $kategori);
    }

    public function cart()
    {
        $mycart = Keranjang::all();
        $art = Artikel::all();
        $con = Contact::all();
        return view('home.cart',compact('mycart','art','con')); 
    }

    public function mycart()
    {
        $mycart = Keranjang::where('user_id',Auth::user()->id)->select('user_id','barang_id',(DB::raw('sum(total_harga) as total_harga')),(DB::raw('sum(jumlah) as jumlah')))
        ->groupBy(DB::raw('(barang_id)'))
        ->get();
        $con = Contact::all();
        $bar = Barang::all();
        $cart = Keranjang::all();
        $fotbar = FotoBarang::all();
        
        return view('home.cart', compact('con','cart','mycart','bar','fotbar'));    
    }
}

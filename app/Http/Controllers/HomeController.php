<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use App\Artikel;
use App\Barang;
use App\Contact;
use App\FotoBarang;
use App\KategoriArtikel;
use App\KategoriBarang;
use App\Keranjang;
use App\Merk;
use App\Pembayaran;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
        return view('home');
    }

    protected function adminDashboard()
    {
        $art = Artikel::all();
        $bar = Barang::all();
        $con = Contact::all();
        $fotbar = FotoBarang::all();
        $katart = KategoriArtikel::all();
        $kategori_barang = KategoriBarang::all();
        $cart = Keranjang::all();
        $merk = Merk::all();
        $pay = Pembayaran::all();
        return view('home.dash',compact('art','bar','con','fotbar','kategori_barang','kat','cart','merk','pay'));
    }
    protected function memberDashboard()
    {
        $art = Artikel::orderBy('created_at','desc')->paginate(3);
        $bar = Barang::all();
        $con = Contact::all();
        $fotbar = FotoBarang::orderBy('created_at','desc')->paginate(8);
        $katart = KategoriArtikel::all();
        $kategori_barang = KategoriBarang::all();
        $cart = Keranjang::all();
        $merk = Merk::all();
        $pay = Pembayaran::all();
        return view('home.member',compact('art','bar','con','fotbar','katart','kategori_barang','cart','merk','pay'));
    }
}

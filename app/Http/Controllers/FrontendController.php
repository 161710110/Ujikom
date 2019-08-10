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
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;
use Auth;
use DB;

class FrontendController extends Controller
{
    public function json(){
        $data = Pembayaran::all();
        return DataTables::of($data)
        ->addColumn('nama_bar',function($data){
            return $data->barang['nama_barang'];
        })
        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
        })
        ->rawColumns(['action','nama_bar'])->make(true);
    }

    public function home()
    {
        $art = Artikel::orderBy('created_at','desc')->paginate(3);
        $bar = Barang::all();
        $con = Contact::all();
        $fotbar = FotoBarang::orderBy('created_at','desc')->paginate(8);
        $katart = KategoriArtikel::all();
        $katbar = KategoriBarang::all();
        $cart = Keranjang::all();
        $merk = Merk::all();
        $pay = Pembayaran::all();
        // dd($fotbar);
        return view('home.index',compact('art','bar','con','fotbar','katart','katbar','cart','merk','pay'));
    }
     public function index()
    {
        $art = Artikel::all();
        $bar = Barang::orderBy('created_at','desc')->paginate(30);
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
        $items = FotoBarang::orderBy('barang.nama_barang')->get(); 
        return view('fitur.sort',compact('items'));
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
        $katart = KategoriArtikel::all();
        $kategori = KategoriArtikel::whereSlug($slug)->first();
        return view('blog.view',compact('art','katart','kategori'))->with('kategori',$kategori);
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
         $mycart = Keranjang::where('users_id',Auth::user()->id)->select('users_id','barang_id',(DB::raw('sum(total_harga) as total_harga')),(DB::raw('sum(jumlah) as jumlah')))
        ->groupBy(DB::raw('(barang_id)'))
        ->get();
        $con = Contact::all();
        $bar = Barang::all();
        $cart = Keranjang::all();
        $fotbar = FotoBarang::all();
        
        return view('home.cart', compact('con','cart','mycart','bar','fotbar'));
    }

    // public function invoicePdf($invoice)
    // {
    // //MENGAMBIL DATA TRANSAKSI BERDASARKAN INVOICE
    // $order = Pembayaran::where('invoice', $invoice)->with('keranjang_id', 'order_detail', 'order_detail.product')->first();
    // //SET CONFIG PDF MENGGUNAKAN FONT SANS-SERIF
    // //DENGAN ME-LOAD VIEW INVOICE.BLADE.PHP
    // $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])
    //     ->loadView('orders.report.invoice', compact('order'));
    // return $pdf->stream();
    // }   

}

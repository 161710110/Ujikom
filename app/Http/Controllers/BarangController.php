<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use App\Merk;
use App\KategoriBarang;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        $data = Barang::all();
        return DataTables::of($data)
        ->addColumn('kategori',function($data){
            return $data->kategori->nama_kategori;
        })
        ->addColumn('merk',function($data){
            return $data->merk->nama_merk;
        })
         ->addColumn('slug',function($data){
                return '<center><a href="/show/'.$data->slug.'"> Show</a>';
        })
        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
        })
        ->rawColumns(['action','merk','kategori','slug'])->make(true);
    }
    public function index()
    {
        $merk = Merk::all();
        $kategori_barang = KategoriBarang::all();
        return view('barang.index', compact('merk','kategori_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required|string',
            'harga_barang' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required|max:3',
            'merk_id' => 'required',
            'kategori_id' => 'required'
        ],[
            'nama_barang.required' => 'Nama Barang  Tidak Boleh Kosong',
            'nama_barang.string' => 'Nama Barang Hanya Menggunakan Alfabet',
            'harga_barang.required' => 'Harga Barang  Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi  Tidak Boleh Kosong',
            'stock.required' => 'Stock Tidak Boleh Kosong',
            'stock.max' => 'Stock maksimal 999',
            'merk_id.required' => 'Merk Barang Tidak Boleh Kosong',
            'kategori_id.required' => 'Kategori Barang Tidak Boleh Kosong'
        ]);
        $data = new Barang;
        $data->nama_barang = $request->nama_barang;
        $data->harga_barang = $request->harga_barang;
        $data->deskripsi = $request->deskripsi;
        $data->stock = $request->stock;
        $data->merk_id = $request->merk_id;
        $data->kategori_id = $request->kategori_id;
        $data->slug = str_slug($request->nama_barang);
        $data->save();
        return response()->json(['success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'merk_id' => 'required',
            'kategori_id' => 'required'
        ],[
            'nama_barang.required' => 'Nama Barang  Tidak Boleh Kosong',
            'harga_barang.required' => 'Harga Barang  Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi  Tidak Boleh Kosong',
            'stock.required' => 'Stock Tidak Boleh Kosong',
            'merk_id.required' => 'Merk Barang Tidak Boleh Kosong',
            'kategori_id.required' => 'Kategori Barang Tidak Boleh Kosong'
        ]);
        $data = Barang::find($id);
        $data->nama_barang = $request->nama_barang;
        $data->harga_barang = $request->harga_barang;
        $data->deskripsi = $request->deskripsi;
        $data->stock = $request->stock;
        $data->merk_id = $request->merk_id;
        $data->kategori_id = $request->kategori_id;
        $data->slug = str_slug($request->nama_barang);
        $data->save();
        return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Barang::find($request->input('id'));
        if($data->delete())
        {
            echo 'Data Deleted';
        }
    }
}

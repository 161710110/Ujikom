<?php

namespace App\Http\Controllers;

use App\KategoriBarang;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        $data = KategoriBarang::all();
        return Datatables::of($data)
        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
            })
            ->rawColumns(['action'])->make(true);
    }
    public function index()
    {
        return view('kategori_barang.index');
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
            'nama_kategori'=>'required'
        ],[
            'nama_kategori.required'=>'Nama Kategori Barang tidak boleh kosong',
    ]);
            $data = new KategoriBarang;
            $data->nama_kategori = $request->nama_kategori;
            $data->slug = str_slug($request->nama_kategori);
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBarang $kategoriBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KategoriBarang::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori'=>'required'
        ],[
            'nama_kategori.required'=>'Nama Kategori Barang tidak boleh kosong'
    ]);
            $data = KategoriBarang::find($id);
            $data->nama_kategori = $request->nama_kategori;
            $data->slug = str_slug($request->nama_kategori);
            $data->save();
            return response()->json(['success'=>true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriBarang  $kategoriBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = KategoriBarang::find($request->input('id'));
        if($data->delete())
        {
            echo 'Data Deleted';
        }
    }
}

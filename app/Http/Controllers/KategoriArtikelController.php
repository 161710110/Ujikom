<?php

namespace App\Http\Controllers;

use App\KategoriArtikel;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        $data = KategoriArtikel::all();
        return Datatables::of($data)
        ->addColumn('action',function($data){
                return '<center><a href="#" class="btn btn-xs btn-primary edit" data-id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>';
            })
            ->rawColumns(['action'])->make(true);
    }
    public function index()
    {
        return view('kategori_artikel.index');
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
            'nama_kategori.required'=>'Nama Kategori tidak boleh kosong',
    ]);
            $data = new KategoriArtikel;
            $data->nama_kategori = $request->nama_kategori;
            $data->slug = str_slug($request->get('nama_kategori'));
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tampilkan = KategoriArtikel::where('slug',$slug)->first();
        return view('kategori_artikel.tampil',compact('tampilkan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KategoriArtikel::findOrFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori'=>'required'
        ],[
            'nama_kategori.required'=>'Nama Kategori tidak boleh kosong'
    ]);
            $data = KategoriArtikel::find($id);
            $data->nama_kategori = $request->nama_kategori;
            $data->slug = str_slug($request->nama_kategori);
            $data->save();
            return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = KategoriArtikel::find($request->input('id'));
        if($data->delete())
        {
            echo 'Data Deleted';
        }
    }
}
